<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweets;

class SweetsController extends Controller
{
    public function index(){
        $sweets = Sweets::all();

        return view('menu',['sweets' => $sweets]);
    }

    public function show($id){
        $sweet = Sweets::findOrFail($id);

        return view('menu.show', ['item' => $sweet]);
    }

    public function create(){
        return view('sweets.create');
    }

    public function store(){
        $sweet = new Sweets();

        $sweet->name = request('name');
        $sweet->type = request('type');
        $sweet->price = request('price');
        $sweet->img = '/img/' . request('img');

        $sweet->save();

        return redirect('/');
    }
}