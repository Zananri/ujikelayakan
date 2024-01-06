<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\LetterType;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LetterTypeController extends Controller
{    

    public function letterType(){
        $letterType = LetterType::all();
        return view('dataKlasifikasi.index',  compact('letterType'));
    }
    public function dataCreate(){

        $dataCreate = LetterType::all();
        return view('dataKlasifikasi.create', compact('dataCreate'));

    }


    public function countLoggedInUsers()
    {
        // Menghitung jumlah pengguna yang sudah login
        $count = User::whereNotNull('id')->count();

        // Mengirimkan variabel $count ke view
        return view('views.dashboard', compact('count'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'letter_code' => 'required',
            'name_type' => 'required',
        ]);
        

        $dataCreate = LetterType::count();
        

        LetterType::create([
            'letter_code' => $request->letter_code . '-' . $dataCreate,
            'name_type' => $request->name_type,



        ]);
        return redirect('/');


    }

    /**
     * Display the specified resource.
     */
    public function show(LetterType $LetterType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $letterType = LetterType::find($id);
        return view('letterType.edit', compact('letterType'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]
            );

            $email = $request->email; // Anda harus mengganti ini dengan cara sesuai dengan form Anda
        $username = $request->name; // Anda harus mengganti ini dengan cara sesuai dengan form Anda

        $email_first_3_letters = substr($email, 0, 3);
        $username_first_3_letters = substr($username, 0, 3);
        $password = $email_first_3_letters . $username_first_3_letters;

        LetterType::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('dataletterType')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        LetterType::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
    }

    public function dashboard()
    {
        $letter_type = LetterType::all();
        $hasil1 = count($letter_type);


        $staff = Staff::where('role', 'staff')->get();
        $jumlahStaff = count($staff);

        $guru = Guru::where('role', 'guru')->get();
        $jumlahGuru = count($guru);

        return view('dashboard', compact('hasil1', 'jumlahStaff', 'jumlahGuru'));
    }
}