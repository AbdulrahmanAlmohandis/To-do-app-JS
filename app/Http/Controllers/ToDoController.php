<?php

namespace App\Http\Controllers;


use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function post(Request $req)
    {
        ToDo::create([
            'content'=> $req->content,
        ]);
        $toDos =ToDo::all();
        return view('home',[
            'toDos' => $toDos,
        ]);
    }
    public function getAll()
    {
        $toDos = ToDo::all();
        return view('home', [
            'toDos' => $toDos,
        ]);
    }

    public function delete($id)
    {
        ToDo::where('id', $id)->delete();
        $toDos = ToDo::all();
        return redirect('/',302, compact($toDos));
    }
}
