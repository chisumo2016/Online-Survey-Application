@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>{{ $questionnaire->title }}</h1>

                <form action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}" method="post">
                    @csrf

                     @foreach($questionnaire->questions as $key=>$question )

                        <div class="card mt-4">
                            <div class="card-header"><strong>{{ $key +1  }}</strong>  {{ $question->question }}</div>

                            <div class="card-body">
                                <ul class="list-group">

                                    @foreach($question->answers as $answer)

                                        <label for="answer{{ $answer->id }}">
                                            <li class="list-group-item">

                                                <input type="radio" name="responses[{{ $key }}][$answer->id]" id="answer{{ $answer->id }}"
                                                       value="{{ $answer->id }}" class="mr-2">
                                                    {{$answer->answer}}

                                                <input type="hidden" name="responses[{{ $key }}][$question->id]" value="{{$question->id}}">

                                            </li>
                                        </label>

                                    @endforeach
                                </ul>
                            </div>
                        </div>

                     @endforeach

                    <button type="submit" class="btn btn-dark">Complete Survey</button>
                </form>


{{--                <div class="card">--}}
{{--                    <div class="card-header">Create Questionnaire</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form action="#" method="post">--}}

{{--                            @csrf--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="title">Title</label>--}}
{{--                                <input type="text" name="title" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter Text">--}}
{{--                                <small id="textHelp" class="form-text text-muted">Give your questionnaire a title that attracts attention .</small>--}}

{{--                                @error('title')--}}
{{--                                <small class="text-danger">{{ $message }}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="purpose">Purpose</label>--}}
{{--                                <input type="text" name="purpose" class="form-control" id="exampleInputPurpose1" aria-describedby="purposeHelp" placeholder="Enter Purpose">--}}
{{--                                <small id="textHelp" class="form-text text-muted">Giving a purpose will increase responses .</small>--}}

{{--                                @error('purpose')--}}
{{--                                <small class="text-danger">{{ $message }}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}


{{--                            <div class="form-group">--}}
{{--                                <button type="submit" class="btn btn-primary">Create Questionnaire</button>--}}
{{--                            </div>--}}

{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
