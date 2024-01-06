@extends('layouts.template')

@section('content')

    <h1>Klasifikasi Surat</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Surat</th>
                <th>Klasifikasi Surat</th>
                <th>Surat Tertaut</th>
                <th class="text-center">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($letterType as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['letter_code'] }}</td>
                    <td>{{ $item['name_type'] }}</td>
                    <td>{{ $item['role'] }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('letterType.edit', $item['id']) }}"><button class=" btn btn-primary">Edit</button></a>
                        <form action="{{ route('letterType.delete', $item['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

    <button class="btn btn-primary"><a href="/letterTypeCreate" class="text-white" style="text-decoration: none; ">Tambah</a></button>

@endsection