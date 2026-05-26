<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(Request $request)
    {

        $roommates = session()->get('roommates', [

            [
                'name' => 'Aulia Putri',
                'gender' => 'Perempuan',
                'umur' => '21 Tahun',
                'lokasi' => 'Banda Aceh',
                'status' => 'Mahasiswa',
                'roommate' => 'Cari 1 roommate',
                'habit1' => 'Tidur cepat',
                'habit2' => 'Suka bersih',
                'budget' => 'Rp 800rb - 1,2jt',
                'image' => 'https://picsum.photos/500/400?random=1'
            ],

            [
                'name' => 'Rizky Maulana',
                'gender' => 'Laki-laki',
                'umur' => '23 Tahun',
                'lokasi' => 'Lhokseumawe',
                'status' => 'Freelancer',
                'roommate' => 'Cari 2 roommate',
                'habit1' => 'Night Owl',
                'habit2' => 'Suka gaming',
                'budget' => 'Rp 1jt - 1,5jt',
                'image' => 'https://picsum.photos/500/400?random=2'
            ],

        ]);

        $search = strtolower($request->search);

        $filteredRoommates = array_filter($roommates, function ($roommate) use ($search) {

            if (!$search) {
                return true;
            }

            return
                str_contains(strtolower($roommate['name']), $search) ||
                str_contains(strtolower($roommate['lokasi']), $search) ||
                str_contains(strtolower($roommate['status']), $search) ||
                str_contains(strtolower($roommate['habit1']), $search) ||
                str_contains(strtolower($roommate['habit2']), $search);

        });

        return view('dashboard', compact('filteredRoommates'));

    }

    public function create()
    {
        return view('create-roommate');
    }

    public function store(Request $request)
    {

        $roommates = session()->get('roommates', []);

        $image = 'https://picsum.photos/500/400?random=' . rand(1,999);

        if($request->hasFile('image')){

            $file = $request->file('image');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $filename);

            $image = asset('uploads/' . $filename);

        }

        $roommates[] = [

            'name' => $request->name,
            'gender' => $request->gender,
            'umur' => $request->umur,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
            'roommate' => $request->roommate,
            'habit1' => $request->habit1,
            'habit2' => $request->habit2,
            'budget' => $request->budget,
            'image' => $image

        ];

        session()->put('roommates', $roommates);

        return redirect('/dashboard');

    }

}