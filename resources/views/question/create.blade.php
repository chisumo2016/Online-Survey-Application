@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Question</div>

                    <div class="card-body">
                        <form action="/questionnaires/{{$questionnaire->id}}/questions" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" name="question[question]" class="form-control" id="exampleInputText1"
                                       value="{{ old('question.question') }}" aria-describedby="textHelp" placeholder="Enter Text">
                                <small id="textHelp" class="form-text text-muted">Ask simple to the point questions for best result .</small>

                                @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <legend>Choices</legend>
                                    <small id="choicesHelp" class="form-text text-muted">Give choices that give you  the most insight into your questions .</small>

                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">Choice 1</label>
                                            <input type="text" name="answers[][answer]" class="form-control" id="answer1"
                                                   value="{{ old('answers.0.answer') }}" aria-describedby="answer1Help" placeholder="Enter Choice 1">
                                            <small id="answer1Help" class="form-text text-muted">Giving a purpose will increase responses .</small>

                                            @error('answers.0.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div>
                                        <div class="form-group">
                                            <label for="answer2">Choice 2</label>
                                            <input type="text" name="answers[][answer]" class="form-control" id="answer2"
                                                   value="{{ old('answers.1.answer') }}" aria-describedby="answer2Help" placeholder="Enter Choice 2">
                                            <small id="answer2Help" class="form-text text-muted">Giving a purpose will increase responses .</small>

                                            @error('answers.1.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <div class="form-group">
                                            <label for="answer3">Choice 3</label>
                                            <input type="text" name="answers[][answer]" class="form-control" id="answer3"
                                                   value="{{ old('answers.2.answer') }}" aria-describedby="answer3Help" placeholder="Enter Choice 3">
                                            <small id="answer3Help" class="form-text text-muted">Giving a purpose will increase responses .</small>

                                            @error('answers.2.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <div class="form-group">
                                            <label for="answer4">Choice 4</label>
                                            <input type="text" name="answers[][answer]" class="form-control" id="answer4"
                                                   value="{{ old('answers.3.answer') }}" aria-describedby="answer4Help" placeholder="Enter Choice 4">
                                            <small id="answer4Help" class="form-text text-muted">Giving a purpose will increase responses .</small>

                                            @error('answers.3.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                </fieldset>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add  Question</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
