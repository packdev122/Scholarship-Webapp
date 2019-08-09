<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Application;
use App\User;
use App\Weightage;
use App\EmailTemplates;
use Redirect;
use Hash;
use Mail;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return redirect("dashboard");
        $user = Auth::user();
        $applications = Application::where('admin_id' , $user->id)->paginate(10);
        return view("admin.applicants", ["applications"=>$applications]);
    }
    public function dashboard()
    {
        // return redirect("dashboard");
        $user = Auth::user();
        return view("admin.dashboard");
    }
    public function applications(){
        $user = Auth::user();
        $applications = Application::paginate(10);
        return view("admin.application.applications", ["applications"=>$applications]);
    }
    
    public function application($id){
        $application = Application::find($id);
        $selectors = User::where("role",1)->get();
        return view("admin.application.application" , ["application" => $application,'selectors' => $selectors]);
    }
    public function score($id){
        $application = Application::find($id);
        return view("admin.score" ,["application" => $application]);
    }

    //Selector
    public function selector($id){
        $application = Application::find($id);
        $selectors = User::where("role",1)->get();
        return view("admin.application.selector" ,["application" => $application,'selectors' => $selectors]);
    }
    public function select_jury($id){
        if(isset($_POST['jury'])){
            $application = Application::find($id);
            $application->jury_id = $_POST['jury'];
            $application->save();

            $jury = User::find($application->jury_id);
            
            $template = EmailTemplates::where("type" , 6)->first();
            if(!$template)$template = new EmailTemplates;
            $data = array('template'=>$template , 'link'=>'http://aimscholar.net/'.'jury/application/'.$application->id);
            Mail::send('mails/jury_select', $data, function($message) use ($jury , $template) {
                $message->to($jury->email, $jury->name)->subject
                    ($template->subject);
                $message->from(env("MAIL_ADMIN"),"AIM Scholarship");
            });

            $jury = User::find($application->jury_id);
            $template = EmailTemplates::where("type" , 5)->first();
            if(!$template)$template = new EmailTemplates;
            $data = array('template'=>$template);
            Mail::send('mails/application_selected', $data, function($message) use ($application , $template) {
                $message->to($application->user->email, $application->user->name)->subject
                    ($template->subject);
                $message->from(env("MAIL_ADMIN"),"AIM Scholarship");
            });

        }
        return Redirect::to("/admin/applications");
    }
    //Settings
    public function weightage(){
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        return view("admin.settings.weightage");
    }
    public function set_weightage(Request $request){
        // dd($request->weightage);
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        foreach($request->weightage as $number => $weight){
            $weightage = Weightage::where("number" ,$number)->first();
            $weightage->percentage = $weight;
            $weightage->save();
        }
        return Redirect::back();
    }
    public function users(){
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        $users = User::where("role",0)->paginate(10);
        return view("admin.settings.users" , ["users"=>$users]);
    }
    public function juries(){
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        $juries = User::where("role",1)->paginate(10);
        return view("admin.settings.juries" ,["juries"=>$juries]);
    }
    public function administrator(){
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        $administrators = User::where("role",3)->paginate(10);
        return view("admin.settings.administrator" ,["administrators"=>$administrators]);
    }
    public function changepassword($id){
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        $user = User::find($id);
        $user->password = Hash::make('user_123456');
        return view("admin.settings.changepassword_confirm");
    }
    public function create_user($type , Request $request){
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        if(isset($_POST["name"])){
            $rules = array(
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) {
                return Redirect::back()
                    ->withErrors($validator);
            } else {
                User::create([
                    'name' => Input::get('name'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password')),
                    'role' => Input::get('type'),
                ]);
                if(Input::get('type') == 1){
                    return Redirect::to('admin/juries');
                }else if(Input::get('type') == 3){
                    return Redirect::to('admin/administrator');
                }
            }
        }
        return view("admin.settings.create_user",["type"=>$type]);
    }
    public function delete_user($id){
        User::find($id)->delete();
        return Redirect::back();
    }
    //Email
    public function email_applicants(){
        $users = User::where("role",0)->paginate(10);
        return view("admin.email.users" , ["users"=>$users]);
    }
    public function email_juries(){
        $juries = User::where("role",1)->paginate(10);
        return view("admin.email.juries" ,["juries"=>$juries]);
    }
    //Scores
    public function scores(){
        $user = Auth::user();
        $jury = 0;
        if(isset($_GET['jury'])){
            $jury = $_GET['jury'];
        }
        if($jury){
            $applications = Application::where('jury_id' , $jury)->orderBy('score','desc')->paginate(10);
        }else{
            $applications = Application::orderBy('score','desc')->paginate(10);
        }
        $selectors = User::where("role",1)->get();
        return view("admin.score.scores", ["applications"=>$applications,'selectors'=>$selectors,'jury'=>$jury]);
    }
    public function email_templates($type = 0){
        if(Auth::user()->role != 2){
            return redirect::to("/");
        }
        $template = EmailTemplates::where("type" , $type)->first();
        if(!$template)$template = new EmailTemplates;
        return view("admin.email_templates",["type"=>$type , "template"=>$template]);
    }
    public function save_template(Request $request){
        if(isset($request->type)){
            $template = EmailTemplates::where("type" , $request->type)->first();
            if(!$template)$template = new EmailTemplates;
            $template->type = $request->type;
            $template->subject = $request->subject;
            $template->fixed_content = $request->fixed_content;
            $template->variable_content = $request->variable_content;
            $template->signature = $request->signature;
            $template->save();
        }
        return Redirect::back();
    }
}
