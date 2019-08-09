<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Application;
class JuryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('jury');
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
        $applications = Application::where('jury_id' , $user->id)->paginate(10);
        return view("jury.applicants", ["applications"=>$applications]);
    }
    public function dashboard()
    {
        // return redirect("dashboard");
        $user = Auth::user();
        return view("jury.dashboard");
    }
    public function applications(){
        $user = Auth::user();
        $applications = Application::where('jury_id' , $user->id)->paginate(10);
        return view("jury.applications", ["applications"=>$applications]);
    }
    public function scores(){
        $user = Auth::user();
        $applications = Application::where('jury_id' , $user->id)->orderBy('score','desc')->paginate(10);
        return view("jury.scores", ["applications"=>$applications]);
    }
    public function application($id){
        $application = Application::find($id);
        return view("jury.application" , ["application" => $application]);
    }
    public function score($id){
        $application = Application::find($id);
        return view("jury.score" ,["application" => $application]);
    }
}
