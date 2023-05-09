<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function tambah()
    {
        return view('user.tambah');
    }

    public function simpan(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => $request->level,
            ]);

            return redirect('user')->with('sukses', 'Data berhasil ditambahkan ✨.');
        } catch (\exception $e) {
            return redirect('user')->with('gagal', 'Data gagal ditambahkan 🧨.');
        }
    }

    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);


            return view('user.edit', compact('user'));
        } catch (\Exception $e) {
            return redirect('user')->with('gagal', 'user tidak ditemukan 🤔.');
        }
    }

    public function update(Request $request)
    {
        try {
            if ($request->password != null) {
                user::where('id', $request->id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'level' => $request->level,
                ]);
            } else {
                user::where('id', $request->id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'level' => $request->level,
                ]);
            }

            return redirect('user')->with('sukses', 'Data berhasil diupdate ✨.');
        } catch (\Exception $e) {
            return redirect('user')->with('gagal', 'Data gagal diupdate 🧨.');
        }
    }

   public function hapus($id){
    try{
        user::destroy($id);

        
        return redirect('user')->with('sukses', 'Data berhasil dihapus ✨.');
    } catch (\Exception $e) {
        return redirect('user')->with('gagal', 'Data gagal dihapus 🧨.');
    }
   }
    
}
