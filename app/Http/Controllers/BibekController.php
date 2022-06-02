<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibek;

class BibekController extends Controller
{
        public function index(){
            $bibeks = Bibek::latest()->get();
            return view ('bibek.index' , compact('bibeks'));
        }
    
        // Add lead
        public function add(){
            $bibeks = Bibek::orderBy('name', 'ASC')->get();
            return view ('bibek.add', compact('bibeks'));
        }
    
        // Store lead
        public function store(Request $request){
            $data = $request->all();
           $bibek = new Bibek();
           $bibek->name = $data['name'];
           $bibek->email = $data['email'];
           $bibek->save();
            return redirect()->back();
        }
    
        // Edit lead
    public function edit($id){
        $bibek = Bibek::findOrFail($id);
        return view ('bibek.edit', compact('bibek'));
    }

    // Store lead
    public function update(Request $request, $id){
        $data = $request->all();
        $bibek = Bibek::findOrFail($id);
        $bibek->name = $data['name'];
        $bibek->email = $data['email'];
        $bibek->save();
        return redirect()->back();
    }

    // Delete
    public function destroy($id){
        $bibek = Bibek::findOrFail($id);
        $bibek->delete();
        return redirect()->back();
    }

    
}
