<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{

    //Mass Assigment
    protected $guarded =[];

    public  function  user()
    {
        return $this->belongsTo(User::class);
    }

    public  function questions()
    {
        return $this->hasMany(Question::class);
    }

}
