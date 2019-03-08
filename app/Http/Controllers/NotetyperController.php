<?php

namespace App\Http\Controllers;

use App\Notetyper;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class NotetyperController extends Controller
{
    public function index(){
        $notetyper = Notetyper::all();
        return view('note_typer.list', compact('notetyper'));
    }
    public function create()
    {
        return view('note_typer.create');
    }
    public function store(Request $request)
    {
        $notetyper = new Notetyper();
        $notetyper->name = $request->input('name');
        $notetyper->description = $request->input('description');
        $notetyper->save();

//        Session::flash('them moi thanh cong');

        return redirect()->route('index');
    }
    public function edit($id)
    {
        $notetyper = Notetyper::find($id);
        return view('note_typer.edit', compact('notetyper','id'));
    }
    public function update(Request $request, $id)
    {
        $notetyper = Notetyper::find($id);
        $notetyper->name = $request->input('name');
        $notetyper->description = $request->input('description');
        $notetyper->save();
        return redirect()->route('index');
    }
    public function destroy($id){
        $notetyper  = Notetyper::find($id);
        $notetyper->delete();
        return redirect()->route('index');
    }
    public function detail($id)
    {
        $notetyper = Notetyper::findOrFail($id);
        return view('note_typer.detail',compact('notetyper'));
    }
}
