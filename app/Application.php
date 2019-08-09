<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Questions;
use App\Weightage;
use App\Files;
class Application extends Model
{
    protected $table = 'application';
    protected $fillable = [
        'user_id','first_name', 'last_name', 'middle_name','mit_id','phone','birthday','team_members','email','address1','address2','city','province','postal_code','sdg_goals','qualification','phone1','phone2',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jury()
    {
        return $this->belongsTo(User::class);
    }
    public function question_answer($number){
        $question = Questions::where("application_id",$this->id)->where("number",$number)->first();
        if($question)return $question->answer;
        else "";
    }
    public function check_value($number,$offset){
        $question = Questions::where("application_id",$this->id)->where("number",$number)->first();
        if($question){
            $check_sum = $question->custom_value;
            // dd(substr($check_sum , 1 , 1));
            return substr($check_sum , $offset , 1);
        }else{
            return 0;
        }
    }
    public function status_label(){
        if($this->status == 0){
            return "<label class='label label-warning'>Pending</label>";
        }
        if($this->status == 1){
            return "<label class='label label-success'>Accepted</label>";
        }
        if($this->status == 2){
            return "<label class='label label-danger'>Declined</label>";
        }
        return "";
    }
    public function question($number){
        $question = Questions::where("application_id",$this->id)->where("number",$number)->first();
        if($question)return $question;
        return new Questions;
    }
    public function calculateTotalScore(){
        $questions = Questions::where("application_id",$this->id)->get();
        $total_sum = 0;
        foreach($questions as $question){
            $total_sum += $question->score * Weightage::getPercentage($question->number);
        }
        
        $score =  round($total_sum / Weightage::totalPercentage());
        $this->score = $score;
        $this->save();
        return $score;
    }
    public function files(){
        $files = Files::where("application_id",$this->id)->get();
        return $files;
    }
}
