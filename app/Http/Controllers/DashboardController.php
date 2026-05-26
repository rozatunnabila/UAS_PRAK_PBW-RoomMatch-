<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(Request $request)
    {

        $roommates = [

            [
                'name' => 'Aulia Putri',
                'gender' => 'Perempuan • 21 Tahun',
                'lokasi' => '📍 Banda Aceh',
                'status' => '🎓 Mahasiswa',
                'roommate' => '🛏 Cari 1 roommate',
                'habit1' => '💤 Tidur cepat',
                'habit2' => '🧹 Suka bersih',
                'budget' => 'Rp 800rb - 1,2jt',
                'image' => 'https://picsum.photos/500/400?random=1'
            ],

            [
                'name' => 'Rizky Maulana',
                'gender' => 'Laki-laki • 23 Tahun',
                'lokasi' => '📍 Lhokseumawe',
                'status' => '💼 Freelancer',
                'roommate' => '🛏 Cari 2 roommate',
                'habit1' => '🌙 Night Owl',
                'habit2' => '🎮 Suka gaming',
                'budget' => 'Rp 1jt - 1,5jt',
                'image' => 'https://picsum.photos/500/400?random=2'
            ],

            [
                'name' => 'Salsabila',
                'gender' => 'Perempuan • 20 Tahun',
                'lokasi' => '📍 Medan',
                'status' => '🎓 Mahasiswa',
                'roommate' => '🛏 Cari 1 roommate',
                'habit1' => '☀️ Bangun pagi',
                'habit2' => '📚 Suka belajar',
                'budget' => 'Rp 900rb - 1,3jt',
                'image' => 'https://picsum.photos/500/400?random=3'
            ],

            [
                'name' => 'Fadhlan',
                'gender' => 'Laki-laki • 24 Tahun',
                'lokasi' => '📍 Banda Aceh',
                'status' => '💼 Programmer',
                'roommate' => '🛏 Cari 1 roommate',
                'habit1' => '☕ Suka ngopi',
                'habit2' => '🎵 Suka musik',
                'budget' => 'Rp 1,2jt - 1,8jt',
                'image' => 'https://picsum.photos/500/400?random=4'
            ],

            [
                'name' => 'Nadia Safira',
                'gender' => 'Perempuan • 22 Tahun',
                'lokasi' => '📍 Langsa',
                'status' => '🎓 Mahasiswa',
                'roommate' => '🛏 Cari 2 roommate',
                'habit1' => '🧹 Suka bersih',
                'habit2' => '🍜 Suka masak',
                'budget' => 'Rp 700rb - 1jt',
                'image' => 'https://picsum.photos/500/400?random=5'
            ],

        ];

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

}