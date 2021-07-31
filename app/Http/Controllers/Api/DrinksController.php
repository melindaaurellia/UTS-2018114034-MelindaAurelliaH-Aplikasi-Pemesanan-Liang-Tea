<?php

namespace App\Http\Controllers\Api;

use App\Models\Drinks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drinks::with('data')->WhereHas('data')->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Drink',
            'data' => $drinks
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:drinks|max:255',
            'image' => 'required',
            'size' => 'required',
            'harga' => 'required',
            'data_id' => 'required',
        ]);

        $drinks = Drinks::create([
            'nama' => $request->nama,
            'image' => $request->image,
            'size' => $request->size,
            'harga' => $request->harga,
            'data_id' => $request->data_id,
        ]);

        if($drinks)
        {
            return response()->json([
                'success' => true,
                'message' => 'Drink Berhasil Ditambahkan',
                'data' => $drinks
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Drink Gagal Ditambahkan',
                'data' => $drinks
            ], 409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $drink = Drinks::with('data')->Where('id', $id)->get();

          return response()->json([
            'success' => true,
            'message' => 'Detail Data Drink',
            'data' => $drink
        ], 200);
    }

    public function edit($id)
    {
          $drink = Drinks::with('data')->Where('id', $id)->first();

          return response()->json([
            'success' => true,
            'message' => 'Detail Data Drink',
            'data' => $drink
        ], 200);
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
        $drinks = Drinks::find($id)->update([
            'nama' => $request->nama,
            'image' => $request->image,
            'size' => $request->size,
            'harga' => $request->harga,
            'data_id' => $request->data_id,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data' => $drink
        ], 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = Drinks::find($id)->delete();
        $drink = Drinks::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $drink
        ], 200);
    }
} 