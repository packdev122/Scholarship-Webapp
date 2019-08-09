<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weightage extends Model
{
    protected $table = 'weightage';
    public static function getPercentage($number){
        $weightage = Weightage::where("number" , $number)->first();
        if($weightage)return $weightage->percentage;
        return 0;
    }
    public static function totalPercentage(){
        return Weightage::all()->sum("percentage");
    }
}
