<?php

namespace App\Http\Controllers\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Contact_us;

class ContactUsController extends Controller
{
    protected $home;

    public function index()
    {
        $Home = new Home();
        return view('contact.index', [
            'getHeader' => $Home->getHeader(),
        ]);
    }

    // Menyimpan kontak yang disubmit dari formulir
    public function storeContact(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Simpan data ke database
        Contact_us::create($validatedData);

        // Redirect kembali ke halaman beranda dengan pesan sukses
        return redirect()->route('contact_us')->with('success', 'Message sent successfully!');
    }
}
