<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function staff(){
        $staff = Staff::all();
        return view('staff.index',  compact('staff'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        Staff::create([
            'name' => $request->name,
            // 'user_id' => Auth::id(),
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff.edit', compact('staff'));
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

        Staff::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('dataTu')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Staff::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
    }
}