@extends('mylayout', ['title'=> 'Data Pasien'])
@section('content')
    <div class="card">
        <div class="card body">
    <center>
        <h3>Data Pasien</h3>
    <br>
    </center>
    <a href="/pasien/create" class="btn btn-dark" width="100vh">Tambah Data</a>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>No Pasien</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Tgl Buat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $item )
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{  $item->no_pasien }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{  $item->umur }}</td>
                <td>{{  $item->jenis_kelamin }}</td>
                <td>{{  $item->created_at }}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    {!! $pasien->links() !!}
</div>
</div>
    
@endsection