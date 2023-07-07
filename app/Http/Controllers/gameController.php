<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = game::orderBy('id', 'asc')->get();
        return view('product')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = DB::table('game')->max('id') + 1;
        $data = [
            'id'=> $id,
            'name' => $request->name,
            'price'=> $request->price,
            'category'=> $request->category,
            'size'=> $request->size,
            'age_rating'=>$request->rating,
            'review'=>$request->review
        ];

        game::create($data);

        return redirect()->to('/product')->with('success', 'Sukses menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = game::whereId($id)->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'size' => 'required',
            'review' => 'required'
        ]);

        game::where('id',$id)->update($data);

        return redirect()->to('/product')->with('success', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = game::whereId($id)->first();
        $data->delete();
        return redirect()->to('/product');
    }
}
