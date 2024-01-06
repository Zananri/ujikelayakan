@extends('layouts.template')

@section('content')
    <div class="main ml-5">
        <h1 class="">Tambah Data Staff</h1>

        <div class="">

            <form action="{{ route('staff') }}" method="POST">

                @csrf

                <div class="mb-3 row">
                    <label for="name" class="col-sm-5 col-form-label">Nama Anda: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="email" class="col-sm-5 col-form-label">Email Anda: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="password" class="col-sm-5 col-form-label">Password: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="type" class="col-sm-5 col-form-label">Tipe Anda: </label>
                    <div class="col-sm-10">
                        <select name="role" id="role" class="form-select">
                            <option selected disabled hidden>Pilih:</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
            </form>
        </div>

    </div>
@endsection