@extends('films.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Film</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('films.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

{{--            title--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $film->title }}
            </div>
        </div>

{{--            director--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Director:</strong>
                {{ $film->director }}
            </div>
        </div>
{{--            producer--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Producer:</strong>
                {{ $film->producer }}
            </div>
        </div>

{{--            year--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                {{ $film->year }}
            </div>
        </div>

{{--            budget--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Budget:</strong>
                {{ $film->budget }}
            </div>
        </div>

{{--            rating--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rating:</strong>
                {{ $film->rating }}
            </div>
        </div>

{{--            description--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $film->description }}
            </div>
        </div>
    </div>
@endsection
