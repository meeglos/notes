@extends('layout')

@section('content')
<h1>Notes</h1>
    <p>
        <h3><a href="{{ url('notes/create') }}">Add a note</a></h3>
    </p>
    <ul>
        @foreach($notes as $note)
            <li>
                {{ $note->note }}
            </li>
        @endforeach
    </ul>
@endsection