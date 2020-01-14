@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Questionnaire</div>

                    <div class="card-body">
                        <form action="/questionnaires" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter Text">
                                <small id="textHelp" class="form-text text-muted">Give your questionnaire a title that attracts attention .</small>

                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="purpose">Purpose</label>
                                <input type="text" name="purpose" class="form-control" id="exampleInputPurpose1" aria-describedby="purposeHelp" placeholder="Enter Purpose">
                                <small id="textHelp" class="form-text text-muted">Giving a purpose will increase responses .</small>

                                @error('purpose')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Questionnaire</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
