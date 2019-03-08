<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotesController extends Controller
{
    public function index(){
//        $notes = Notes::All();
        $notes = Notes::paginate(5);
        return view('note.list', compact('notes'));
    }
    public function create(){
        return view('note.create');
    }
    public function store(Request $request){
        $note = new Notes();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->save();
        Session::flash('success', 'Note được tạo mới thành công!');
        return redirect()->route('note.index');
    }
    public function showDetail($id){
        $note = Notes::findOrFail($id);
        return view('note.detail',compact('note'));
    }
    public function edit($id)
    {
        $note = Notes::findOrFail($id);
        return view('note.edit', compact('note'));
    }
    public function update(Request $request, $id){
        $note = Notes::findOrFail($id);
        $note->title     = $request->input('title');
        $note->content     = $request->input('content');
        $note->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('note.index');
    }
    public function delete($id){
        $note = Notes::findOrFail($id);
        $note->delete();
        Session::flash('success', 'note is deleted completely!');
        return redirect()->route('note.index');
    }
}
