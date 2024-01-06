@extends('layouts.template')

@section('content')

    <h1>Data Guru</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th class="text-center">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($staff as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['role'] }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('staff.edit', $item['id']) }}"><button class=" btn btn-primary">Edit</button></a>
                        <form action="{{ route('staff.delete', $item['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

    <button class="btn btn-primary"><a href="/staffCreate" class="text-white" style="text-decoration: none; ">Tambah</a></button>

@endsection