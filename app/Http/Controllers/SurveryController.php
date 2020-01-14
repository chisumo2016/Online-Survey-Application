<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class SurveryController extends Controller
{
    //

    public  function  show(Questionnaire $questionnaire, $slug)
    {
         $questionnaire->load('questions.answers');
         return view('survey.show',compact('questionnaire'));
    }

    public  function  store()
    {
        dd(request()->all());
    }
}
