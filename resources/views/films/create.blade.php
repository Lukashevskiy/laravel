@extends('films.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="">
                <h2>Add New Film</h2>
            </div>
            <div class="mt-3 mb-4">
                <a class="btn btn-primary" href="{{ route('films.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> There were some problems.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('films.store') }}" method="POST">
        @csrf

        <div class="row">
{{--            title--}}

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                </div>
            </div>

{{--            director--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Director:</strong>
                    <input type="text" name="director" class="form-control" placeholder="Enter Director">
                </div>
            </div>

{{--            producer--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Producer:</strong>
                    <input type="text" name="producer" class="form-control" placeholder="Enter Producer">
                </div>
            </div>

{{--            year--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Year:</strong>
                    <input type="text" name="year" class="form-control" placeholder="Enter Year">
                </div>
            </div>

{{--            budget--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Budget:</strong>
                    <input type="text" name="budget" class="form-control" placeholder="Enter Budget">
                </div>
            </div>

{{--            rating--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rating:</strong>
                    <input type="text" name="rating" class="form-control" placeholder="Enter Rating">
                </div>
            </div>

{{--            description--}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Enter Description"></textarea>
                </div>
            </div>
            <div class="col-lg-12 d-grid gap-2">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </div>

    </form>
@endsection
