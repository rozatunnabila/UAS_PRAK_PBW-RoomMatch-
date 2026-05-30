<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {

        $search = $request->search;

        $filteredRoommates = Iklan::where('status', 'active')

            ->when($search, function ($query) use ($search) {

                $query->where(function ($q) use ($search) {

                    $q->where('judul', 'like', "%{$search}%")
                      ->orWhere('lokasi', 'like', "%{$search}%")
                      ->orWhere('pekerjaan', 'like', "%{$search}%")
                      ->orWhere('habit1', 'like', "%{$search}%")
                      ->orWhere('habit2', 'like', "%{$search}%");

                });

            })

            ->latest()

            ->get();

        return view('dashboard', compact('filteredRoommates'));

    }

    /*
    |--------------------------------------------------------------------------
    | HALAMAN TAMBAH ROOMMATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {

        return view('create-roommate');

    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN ROOMMATE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {

        $gambar = null;

        /*
        |--------------------------------------------------------------------------
        | UPLOAD GAMBAR
        |--------------------------------------------------------------------------
        */

        if($request->hasFile('image')){

            $file = $request->file('image');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $filename);

            $gambar = 'uploads/' . $filename;

        }

        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATABASE
        |--------------------------------------------------------------------------
        */

        Iklan::create([

            /*
            |--------------------------------------------------------------------------
            | USER LOGIN
            |--------------------------------------------------------------------------
            */

            'user_id' => Auth::id(),

            /*
            |--------------------------------------------------------------------------
            | DATA ROOMMATE
            |--------------------------------------------------------------------------
            */

            'judul' => $request->name,

            'lokasi' => $request->lokasi,

            'harga' => $request->budget,

            'gambar' => $gambar,

            'status' => 'active',

            'gender' => $request->gender,

            'umur' => $request->umur,

            'pekerjaan' => $request->status,

            'roommate' => $request->roommate,

            'habit1' => $request->habit1,

            'habit2' => $request->habit2

        ]);

        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect('/dashboard');

    }

}