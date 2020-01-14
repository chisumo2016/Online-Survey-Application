<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public  function create(Questionnaire $questionnaire)
    {
        return view('question.create',compact('questionnaire'));
    }

    public  function  store(Questionnaire $questionnaire)
    {
        //dd(request()->all());

        $data = request()->validate([
            'question.question' => 'required',  // check on ui
            'answers.*.answer' => 'required'  // check on ui on answers[][answer]

        ]);
    }

}
