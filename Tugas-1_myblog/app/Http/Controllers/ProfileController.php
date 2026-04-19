<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    // app/Http/Controllers/ProfileController.php

public function skills()
{
    $skills = [
        ['title' => 'HTML & CSS',   'icon' => 'htmlcss.png'],
        ['title' => 'JavaScript',   'icon' => 'js.png'],
        ['title' => 'Laravel',      'icon' => 'laravel.png'],
        ['title' => 'Tailwind CSS', 'icon' => 'tailwind.png'],
        ['title' => 'SQL Database', 'icon' => 'sql.png'],
    ];
    return view('pages.skills', compact('skills'));
}

    public function portfolio()
    {
        $projects = [
            ['title' => 'Sistem Manajemen Perpustakaan', 'desc' => 'Aplikasi pendataan buku dan transaksi peminjaman.'],
            ['title' => 'Futsal Booking System', 'desc' => 'Platform pemesanan lapangan futsal terintegrasi.'],
            ['title' => 'Bicycle Tracker', 'desc' => 'Simulasi pergerakan sepeda berbasis Java.']
        ];
        return view('pages.portfolio', compact('projects'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}