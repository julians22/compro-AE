<?php

namespace App\Http\Controllers;

use App\Meta;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{

    function index() {

        Meta::addMeta('title', 'Home - Arpan Electric');
        Meta::addMeta('description', 'Yuk, Temukan Solusi Elektronik Terbaik di Arpan Electric! Cari barang elektronik yang berkualitas? Datang aja ke Arpan Electric Kami punya banyak pilihan, lho!');

        return Inertia::render('Welcome');
    }
}
