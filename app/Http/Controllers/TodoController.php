<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos = Todo::all();
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all(); // Get Request Items
        $newtodo = ["subject" => $input["subject"], "details" => $input["details"]]; // Extract Properties
        $todo = Todo::create($newtodo); // Create Todo
        response()->json(Todo::all()); // Response
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $todo = Todo::find($id);
        return response()->json($todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all(); // Get Request Items
        $newtodo = ["subject" => $input["subject"], "details" => $input["details"]]; // Extract Properties
        $todo = Todo::find($id)->update($newtodo); // Update Todo
        response()->json(Todo::all()); // Response
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Todo::find($id)->delete(); // DeleteTodo
        response()->json(Todo::all()); // Response
    }
}
