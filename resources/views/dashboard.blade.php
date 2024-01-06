@extends('layouts.template')

@section('content')

<h1>Dashboard</h1>

    <div class="container" style="padding-left: 80px;" >

        <div class="row" style="gap: 25px; margin-top:15%; ">

            <div class="col-8" style="border: 1px solid white;  padding:15px; height:150px; background-color:aliceblue; border-radius:10px">
                <h5 style="color: black" >Surat Keluar</h5>
                <br><br>
                <h3 style="color: black;"></h3>
            </div>
            <div class="col-3" style="border: 1px solid white;  padding:15px; height:150px; background-color:aliceblue; border-radius:10px;">
                <h5 style="color: black" >Klasifikasi Surat</h5>
                <br><br>
                <h3 style="color: black;">{{$hasil1}}</h3>
            </div>
        </div>


        <div class="row" style="gap: 25px; margin-top: 20px;" >


            <div class="col-3" style="border: 1px solid white;  padding:15px; height:150px; background-color:aliceblue; border-radius:10px;">
                <h5 style="color: black" >Staff Tata Usaha</h5>
                <br><br>
                <h3 style="color: black;"> {{ $jumlahStaff }}</h3>
            </div>


            <div class="col-8" style="border: 1px solid white;  padding:15px; height:150px; background-color:aliceblue; border-radius:10px; margin-bottom:180px;">
                <h5 style="color: black" >Guru</h5>
                <br><br>
                <h3 style="color: black;">{{ $jumlahGuru }}</h3>
            </div>

        </div>

    </div>

@endsection