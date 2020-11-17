<?php

namespace App\Http\Controllers;
use App\Models\Drinks;
use Illuminate\Http\Request;

class DrinksController extends Controller
{
    public function welcome()
    {

        return view('drinks.welcome');
    }
    public function index()
    {
        $drinks = Drinks::orderby('id', 'desc')->paginate(5);

        return view('drinks.index', compact('drinks'));
    }

    public function create()
    {

        return view('drinks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:drinks|max:255',
            'size' => 'required',
        ]);
        $drinks = new Drinks;

        $drinks->nama = $request->nama;
        $drinks->size = $request->size;

        $drinks->save();

        return redirect('/drinks');
    }

    public function show($id)
    {
        $drink = Drinks::where('id', $id)->first();
        return view('drinks.show', ['drink'=>$drink]);
    }

    public function edit($id)
    {
        $drink = Drinks::where('id', $id)->first();
        return view('drinks.edit', ['drink'=>$drink]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:drinks|max:255',
            'size' => 'required',
        ]);

        Drinks::find($id)->update([
            'nama' => $request->nama,
            'size' => $request->size
        ]);

        return redirect('/drinks');
    }

    public function destroy($id)
    {
        Drinks::find($id)->delete();
        return redirect('/drinks');
    }

}
