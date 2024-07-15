<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_us;

class ContactController extends Controller
{
    // Menampilkan semua kontak
    public function index()
    {
        $contacts = Contact_us::all();
        return view('admin.contact_us.index', ['contacts' => $contacts]);
    }

    // Menampilkan form untuk mengedit kontak
    public function edit($id)
    {
        $contact = Contact_us::findOrFail($id);
        return view('admin.contact_us.edit', ['contact' => $contact]);
    }

    // Memperbarui kontak yang sudah ada
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact_us::whereId($id)->update($validatedData);
        return redirect()->route('contact.index')->with('success', 'Contact updated successfully!');
    }

    // Menghapus kontak
    public function destroy($id)
    {
        $contact = Contact_us::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact deleted successfully!');
    }
}
