<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Contact_us;

class HomeController extends Controller
{
    protected $home;
 
    public function index()
    {
        $Home = new Home();
        return view('home.index', [
            'getHeader' => $Home->getHeader(),
            'getPortfolio'     => $Home->getPortfolio(),
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
        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}