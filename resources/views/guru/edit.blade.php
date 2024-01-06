@extends('layouts.template')

@section('content')
    <div class="main ml-5">
        <h1 class="">Tambah Data Guru</h1>

        <div class="">

            <form action="{{ route('guru.update', $guru['id']) }}" method="POST">

                @csrf
                @method('PATCH')

                <div class="mb-3 row">
                    <label for="name" class="col-sm-5 col-form-label">Nama Anda: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $guru['name'] }}">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="email" class="col-sm-5 col-form-label">Email Anda: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $guru['email'] }}">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="password" class="col-sm-5 col-form-label">Password: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
            </form>
        </div>

    </div>
@endsection