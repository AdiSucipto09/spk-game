<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class alternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = alternatif::orderBy('id_alternatif', 'asc')->get();
        return view('alternatif')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alternatif');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = DB::table('alternatif')->max('id_alternatif') + 1;
        $data = [
            'id_alternatif'=> $id,
            'alternatif' => $request->alternatif,
            'harga'=> $request->harga,
            'rate_umur'=> $request->rating,
            'review'=> $request->review,
            'size'=>$request->size,
            'user_download'=>$request->user
        ];

        alternatif::create($data);

        return redirect()->to('/alternatif')->with('success', 'Sukses menambahkan data');
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
        $data = alternatif::whereId($id)->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'alternatif' => 'required',
            'harga' => 'required',
            'rate_umur' => 'required',
            'review' => 'required',
            'size' => 'required',
            'user_download' => 'required'
        ]);

        alternatif::where('id',$id)->update($data);

        return redirect()->to('/alternatif')->with('success', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = alternatif::whereId($id)->first();
        $data->delete();
        return redirect()->to('/alternatif');
    }
}
