<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes/list', compact('notes'));
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
        $data = request()->all();

        Note::create($data);

        return Redirect::to('notes');
    }

    public function show($note)
    {
        dd($note);
    }
}
