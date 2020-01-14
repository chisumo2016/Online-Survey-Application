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
            'question.question' => 'required',  // check on ui as notatiojn
            'answers.*.answer' => 'required'  // check on ui on answers[][answer]

        ]);


        $question  = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionnaires/'. $questionnaire->id);


    }

}
