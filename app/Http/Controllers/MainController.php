<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class MainController extends Controller
{
    public function index()
{
    $works = Work::all();
    return view('main.index', compact('works'));
}

public function show($id)
{
    $work = Work::findOrFail($id);
    return view('main.work.show', compact('work'));
}


}
