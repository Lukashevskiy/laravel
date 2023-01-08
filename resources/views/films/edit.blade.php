@extends('films.layout')

@section('content')
    <div class="">
        <div class="col-lg-12 mt-5">
            <div class="left">
                <h2>Edit film</h2>
            </div>
            <div class="mt-3 mb-4">
                <a class="btn btn-primary" href="{{ route('films.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('films.update',$film->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

{{--            Title--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $film->title }}" class="form-control" placeholder="Title">
                </div>
            </div>

{{--            Director--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Director:</strong>
                    <input type="text" name="title" value="{{ $film->director }}" class="form-control" placeholder="Director">
                </div>
            </div>

{{--            Producer--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Producer:</strong>
                    <input type="text" name="title" value="{{ $film->producer }}" class="form-control" placeholder="Producer">
                </div>
            </div>

{{--            Year--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Year:</strong>
                    <input type="text" name="title" value="{{ $film->year }}" class="form-control" placeholder="Year">
                </div>
            </div>

{{--            Budget--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Budget:</strong>
                    <input type="text" name="title" value="{{ $film->budget }}" class="form-control" placeholder="Budget">
                </div>
            </div>

{{--            Rating--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rating:</strong>
                    <input type="text" name="title" value="{{ $film->rating }}" class="form-control" placeholder="Rating">
                </div>
            </div>

{{--            Description--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $film->description }}</textarea>
                </div>
            </div>
            <div class="col-lg-12 d-grid gap-2">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </div>

    </form>
@endsection
