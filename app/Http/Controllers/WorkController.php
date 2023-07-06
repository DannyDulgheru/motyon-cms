<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{

public function index()
{
    $works = Work::all();
    return view('works.index', compact('works'));
}

public function create()
{
    return view('works.create');
}

public function store(Request $request)
{
    $work = new Work();
    $work->title = $request->input('title');
    $work->main_photo = $request->file('main_photo')->store('public/works');
    $work->description = $request->input('description');
    $work->video = $request->input('video');
    // Save the work
    $work->save();

    return redirect()->route('works.show', $work->id);
}

public function show(Work $work)
{
    return view('works.show', compact('work'));
}

public function edit(Work $work)
{
    return view('works.edit', compact('work'));
}

public function update(Request $request, Work $work)
{
    $work->title = $request->input('title');
    if ($request->hasFile('main_photo')) {
        $work->main_photo = $request->file('main_photo')->store('public/works');
    }
    $work->description = $request->input('description');
    $work->video = $request->input('video');
    // Update the work
    $work->save();

    return redirect()->route('works.show', $work->id);
}

}


