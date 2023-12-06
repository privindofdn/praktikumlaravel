<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Controller1 extends Controller
{
    public function tampil1()
    {
        return view('tampil1');
    }

    public function tampilkan(Request $request)
    {
        // Create a new instance of the Mahasiswa model
        $model = new Mahasiswa();

        // Insert data into the database with created_at
        $model->create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'created_at' => date("Y-m-d H:i:s"), // Use the current timestamp for created_at
        ]);

        // Retrieve all data from the Mahasiswa model
        $dataAll = $model->all();

        // Pass the data to the 'tampil2' view
        return view('tampil2', ['data' => $request->all(), 'dataAll' => $dataAll]);
    }
}