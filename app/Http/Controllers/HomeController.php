<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Application;
use App\Questions;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return redirect("dashboard");
        // return view("main.dashboard");
        return view('front.index');
    }
    public function dashboard(){
        return view("main.dashboard");
    }
    public function terms_conditions(){
        return view("front.terms");
    }
    public function contacts(){
        return view("front.contacts");
    }
    public function jury(){
        return view("front.jury");
    }
    public function collective(){
        return view("front.collective");
    }
    public function anusha(){
        return view("front.anusha");
    }
    public function about(){
        return view("front.about");
    }
    public function application(Request $request){
        // dd(isset($request));
        $user = Auth::user();
        $application_data = null;
        if($request->session()->has("application")){
            $application_data = $request->session()->get("application");
        }
        // dd($application_data['application']['attributes']['team_members']);
        if(Auth::user()){
            if($application_data){
                return view("front.application",["application"=>$application_data['application']['attributes'],"questions"=>$application_data['questions'],'login'=>true]);
            }else{
                $application = Application::where("user_id",$user->id)->first();
                if(!$application)$application = new Application;
                return view("front.application1",["application"=>$application,'login'=>false]);
            }
        }else{
            if(!$request->session()->has("application")){
                $application_data["application"] = new Application;
                for($i = 1;$i<=12;$i++){
                    $application_data["questions"][$i] = new Questions;
                }
            }
            return view("front.application",["application"=>$application_data['application']['attributes'],"questions"=>$application_data['questions'],'login'=>false]);
        }
    }
    public function faqs(){
        return view("front.faqs");
    }
    public function readings(){
        return view("front.readings");
    }
    public function nutshell(){
        return view("front.nutshell");
    }
    public function video(){
        return view("front.video");
    }
    public function blog(){
        return view("front.blog");
    }
    public function news(){
        return view("front.news");
    }
}
