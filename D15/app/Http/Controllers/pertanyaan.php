<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class pertanyaan extends Controller
{
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('AdminLTE.post.index', compact('pertanyaan'));
    }
    public function create(){
        return view('AdminLTE.post.create');
    }
    public function store(Request $request){
        $request->validate([
            "judul" =>'required',
            "pertanyaan" => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert(
            [
                "judul" => $request["judul"],
                "isi" => $request["pertanyaan"],
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]  
        );
        return redirect('/')->with('success', 'Pertanyaan Berhasil dibuat!');
    }
    public function show($pertanyaan_id){
        $showQ = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
        return view('AdminLTE.post.show', compact('showQ'));
    }

    public function edit($pertanyaan_id){
        $editQ = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
        return view('AdminLTE.post.edit', compact('editQ'));
    }

    public function update($id,Request $request){
        $request->validate([
            "judul" =>'required',
            "pertanyaan" => 'required'
        ]);


        $query = DB::table('pertanyaan')
              ->where('id', $id)
              ->update([
                  'judul' => $request["judul"],
                  'isi' => $request["pertanyaan"],
                  'updated_at' => date('Y-m-d H:i:s')
                  ]);
        return redirect('/')->with('success', 'Pertanyaan Berhasil diedit!');
    }

    public function destroy($id){
        $query = DB::table('pertanyaan')
                ->where('id', $id)
                ->delete();
        return redirect('/')->with('success', 'Pertanyaan Berhasil dihapus!');
    }

}
