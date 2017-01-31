@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Create a note</h1>
        <form method="post" class="form" action="{{ url('notes') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <textarea name="note" class="form-control" id="note" rows="10" cols="40"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Create note</button>
        </form>
    </div>
</div>
@endsection
