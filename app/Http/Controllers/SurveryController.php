<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class SurveryController extends Controller
{
    //

    public  function  show(Questionnaire $questionnaire, $slug)
    {
         return view('survey.show',compact('questionnaire'));
    }
}
