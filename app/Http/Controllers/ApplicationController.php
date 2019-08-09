<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Application;
use App\Questions;
use App\Files;
use App\EmailTemplates;
use Response;
use Redirect;
use Mail;
class ApplicationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth',['except' => ['store_application']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function save_application(Request $request){
        // dd(isset($request));
        $user = Auth::user();
        if(isset($request->application)){
            $application = Application::where("user_id",$user->id)->first();
            // dd($request->application);
            if($application){
                $application->update($request->application);
            }else{
                $application = new Application;
                $application = Application::create($request->application);
                $application->user_id = $user->id;
                $application->save();
            }
            $questions = $request->question;
            // dd($request->file('file'));
            for($i=1 ; $i <= 12 ; $i++){
                $question = Questions::where("application_id" , $application->id)->where( 'number' , $i )->first();
                if(!$question){
                    $question = new Questions;
                    $question->application_id = $application->id;
                    $question->number = $i;
                }
                if($i == 9){
                    $question->save();
                    $files = $request->file('file');
                    if($files){
                        Files::where("application_id",$application->id)->delete();
                        foreach($files as $file){
                            $destinationPath = 'uploads';
                            $filename = time().$file->getClientOriginalName();
                            $file->move($destinationPath,$filename);
                            $file = new Files;
                            $file->application_id = $application->id;
                            $file->file_name = $filename;
                            $file->url = 'uploads/'.$filename;
                            $file->save();
                        }
                    }
                }else if($i == 12){
                    $question->custom_value = $questions[$i]['radio1'].$questions[$i]['radio2'].$questions[$i]['radio3'];
                    $question->save();
                }else{
                    $question->answer = $questions[$i];
                    // dd($question);
                    $question->save();
                }
            }
        }
        //Mail Send
        $template = EmailTemplates::where("type" , 1)->first();
        if(!$template)$template = new EmailTemplates;
        $data = array('template'=>$template);
        Mail::send('mails/template', $data, function($message) use ($user , $template) {
            $message->to($user->email, $user->name)->subject($template->subject);
            $message->from(env("MAIL_ADMIN"),"AIM Scholarship");
        });

        $template = EmailTemplates::where("type" , 2)->first();
        if(!$template)$template = new EmailTemplates;
        $data = array('template'=>$template);
        Mail::send('mails/template', $data, function($message) use ($user , $template) {
            $message->to($user->email, $user->name)->subject($template->subject);
            $message->from(env("MAIL_ADMIN"),"AIM Scholarship");
        });
        return $this->store_application($request);
    }
    public function save_score(Request $request){
        if($request->post('application_id')){
            $number = $request->post('number');
            $application_id = $request->post('application_id');
            $application = Application::find($application_id);
            $question = Questions::where("application_id",$application->id)->where("number",$number)->first();
            $question->score = $request->post('score');
            $question->feedback = $request->post('feedback');
            $question->save();
            $score = $application->calculateTotalScore();
            echo json_encode(array("score" => $score));
        }
    }
    public function download($filename){
        $file= public_path(). '/uploads'.'/'.$filename;
        return Response::download($file);
    }
    public function accept($id){
        $application = Application::find($id);
        $application->status = 1;
        $application->save();
        
        // $email = $application->user->email;
        $template = EmailTemplates::where("type" , 2)->first();
        if(!$template)$template = new EmailTemplates;
        $data = array('template'=>$template);

        Mail::send('mails/application_accept', $data, function($message) use ($application , $template) {
            $message->to($application->email, $application->user->name)->subject
                ($template->subject);
            $message->from(env("MAIL_ADMIN"),"AIM Scholarship");
        });
        return Redirect::back();
    }
    public function declined(Request $request){
        $application = Application::find($request->id);
        $application->status = 2;
        $application->save();

        $template = EmailTemplates::where("type" , 3)->first();
        if(!$template)$template = new EmailTemplates;
        $data = array('template'=>$template , 'feedback'=>$request->feedback);

        Mail::send('mails/application_declined', $data, function($message) use ($application , $template) {
            $message->to($application->email, $application->user->name)->subject
                ($template->subject);
            $message->from(env("MAIL_ADMIN"),"AIM Scholarship");
        });
        return Redirect::back();
    }
    public function store_application(Request $request){
        if(isset($request->application)){
            if($request->session()->has('application')){
                $request->session()->forget('application');
            }
            $application_data = [];
            // dd($request->application);
            $application = new Application;
            $application->attributes = $request->application;
            $application_data["application"] = $application;
            $questions = $request->question;
            // dd($request->file('file'));
            $questions_data = [];
            for($i=1 ; $i <= 12 ; $i++){
                $question = new Questions;
                $question->number = $i;
                if($i == 9){

                }
                else if($i == 12){
                    $question->answer = $questions[$i]['radio1'].$questions[$i]['radio2'].$questions[$i]['radio3'];
                }else{
                    $question->answer = $questions[$i];
                }
                $questions_data[$i] = $question;
            }
            $application_data["questions"] = $questions_data;
            $request->session()->put("application" , $application_data);
        }
        //
        return Redirect::to("/application")->withErrors(array("success"=>"Thank you for submitting the application"));
    }
}
