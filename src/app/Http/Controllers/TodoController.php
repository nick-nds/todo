<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $todos = Todo::all();
    return view('home', [
      'data' => $todos,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validate = $request->validate([
      'title' => 'required|string',
      'description' => 'required|string',
      'location' => 'required|string',
      'starttime' => 'required|string',
      'endtime' => 'required|string',
    ]);


    $todo = new Todo;
    $todo->title = $request->title;
    $todo->description = $request->description;
    $todo->location = $request->location;
    $todo->starttime = $request->starttime;
    $todo->endtime = $request->endtime;
    $todo->save();
    return redirect()->route('add')->with('status', 'Todo added');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Todo  $todo
   * @return \Illuminate\Http\Response
   */
  public function show(Todo $todo)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Todo  $todo
   * @return \Illuminate\Http\Response
   */
  public function edit(Todo $todo)
  {
    return view('edit', [
      'todo' => $todo,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Todo  $todo
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Todo $todo)
  {
    $todo->title = $request->title;
    $todo->description = $request->description;
    $todo->location = $request->location;
    $todo->starttime = $request->starttime;
    $todo->endtime = $request->endtime;
    $todo->save();
    return redirect()->route('home')->with('status', 'Todo edited');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Todo  $todo
   * @return \Illuminate\Http\Response
   */
  public function destroy(Todo $todo)
  {
    $todo->delete();
    return redirect()->route('home')->with('status', 'Todo deleted');
  }
}
