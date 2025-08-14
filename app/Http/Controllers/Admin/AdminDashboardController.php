<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $usersCount = Schema::hasTable('users') ? DB::table('users')->count() : 0;

        if (Schema::hasTable('beritas')) {
            $beritaCount = DB::table('beritas')->count();
        } elseif (Schema::hasTable('berita')) {
            $beritaCount = DB::table('berita')->count();
        } else {
            $beritaCount = 0;
        }

        if (Schema::hasTable('layanans')) {
            $layananCount = DB::table('layanans')->count();
        } elseif (Schema::hasTable('layanan')) {
            $layananCount = DB::table('layanan')->count();
        } else {
            $layananCount = 0;
        }

        if (Schema::hasTable('galeris')) {
            $galeriCount = DB::table('galeris')->count();
        } elseif (Schema::hasTable('galeri')) {
            $galeriCount = DB::table('galeri')->count();
        } else {
            $galeriCount = 0;
        }

        return view('admin.dashboard', compact('usersCount', 'beritaCount', 'layananCount', 'galeriCount'));
    }
}
