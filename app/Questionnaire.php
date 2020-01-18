<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{

    //Mass Assigment
    protected $guarded =[];

    public  function  path()
    {
       return url('/questionnaires/' .$this->id);   ///questionnaires/{{$questionnaire->id}} or '/questionnaires/' .$this->id
    }

    public  function  user()
    {
        return $this->belongsTo(User::class);
    }

    public  function questions()
    {
        return $this->hasMany(Question::class);
    }

    public  function surveys()
    {
        return $this->hasMany(Survey::class);
    }

}
