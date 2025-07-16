<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    // Tampilkan form pendaftaran
    public function create()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'nullable',
            'school_class' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Simpan file foto jika ada
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $validated['photo'] = $photoPath;
        }
    
        // Tambahkan status default sebagai pending
        $validated['status'] = 'pending';
    
        Member::create($validated);
    
        return redirect('/daftar')->with('success', 'Pendaftaran berhasil, tunggu persetujuan admin.');
    }
    
    // Tampilkan semua member (admin)
    public function index()
    {
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('admin.members.index', compact('members'));
    }

    // Setujui member (ubah status jadi approved)
    public function approve($id)
    {
        $member = Member::findOrFail($id);
        $member->status = 'approved';
        $member->save();

        return redirect('/members/pending')->with('success', 'Anggota disetujui.');
    }

    // Tampilkan list member yang sudah di-approve
    public function approvedList()
    {
        $members = Member::where('status', 'approved')->get();
        $isAdmin = Auth::check() && Auth::user()->is_admin;

        return view('members.approved', compact('members', 'isAdmin'));
    }

    // Edit data member
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    // Update data member
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'school_class' => 'required',
            'photo' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $member = Member::findOrFail($id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->school_class = $request->school_class;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $member->photo = $photoPath;
        }

        $member->save();

        return redirect('/members')->with('success', 'Anggota berhasil diperbarui.');
    }

    // Hapus member
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect('/members')->with('success', 'Anggota berhasil dihapus.');
    }

    // Tampilkan anggota yang masih pending
    public function pendingList()
    {
        $members = Member::where('status', 'pending')->get();
        return view('admin.members.pending', compact('members'));
    }
}
