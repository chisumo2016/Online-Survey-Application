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

    public  function  store(Questionnaire $questionnaire)
    {
        //dd(request()->all());

        $data = request()->validate([

            'responses.*.answer_id'     => 'required',
            'responses.*.question_id'   => 'required',
        ]);

        $survey = $questionnaire->surveys()->create();

        dd(request()->all());
    }
}
