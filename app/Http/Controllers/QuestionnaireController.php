<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public  function  create()
    {
        return view('questionnaire.create');
    }


    public  function  store()
    {
        $data = request()->validate([
            'title'  => 'required',
            'purpose'  => 'required',

        ]);

        //1:

        $data['user_id'] = auth()->user()->id;


        $questionnaire = Questionnaire::create($data);

        return redirect('/questionnaires/' . $questionnaire->id);

    }

    public  function  show(Questionnaire  $questionnaire )
    {
        return view('questionnaire.show',compact('questionnaire'));
    }
}
