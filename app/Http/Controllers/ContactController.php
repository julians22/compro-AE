<?php

namespace App\Http\Controllers;

use App\Meta;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ContactController extends Controller
{
    function index() {

        Meta::addMeta('title', 'Hubungi Kami - Arpan Electric');
        Meta::addMeta('description', 'Yuk, Temukan Solusi Elektronik Terbaik di Arpan Electric! Cari barang elektronik yang berkualitas? Datang aja ke Arpan Electric Kami punya banyak pilihan, lho!');

        return Inertia::render('Contact');
    }

    function store(Request $request) {
        $request->validate([
            'full_name' => 'required|string|max:120',
            'email' => 'email',
            'phone' => 'required|string|min:9|max:20',
            'subject' => 'required|string|in:quotation,visit'
        ]);

        DB::beginTransaction();
        try {
            $contact = Contact::create($request->only(
                "full_name",
                "email",
                "phone",
                "subject",
            ));
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        DB::commit();

        return to_route('contact-us');
    }
}
