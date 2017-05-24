@extends('layouts.master')
@section('content')
	<div class="approach" id="app">
		<div class="container">
			 <div class="gallery-head text-center">
				<h3>Data Beasiswa</h3>
				<span> </span>
			</div>
			<div class="panel panel-default">
                <div class="panel-body">
                  <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>Asal Sekolah</th>
                      <th>Tahun Lulus</th>
											<th>Email</th>
											<th>No. Telp</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($beasiswas as $beasiswa)
                    <tr>
                      <td>{{ $beasiswa->id }}</td>
                      <td>{{ $beasiswa->nisn }}</td>
                      <td>{{ $beasiswa->nama }}</td>
                      <td>{{ $beasiswa->ttl }}</td>
                      <td>{{ $beasiswa->alamat }}</td>
                      <td>{{ $beasiswa->jk }}</td>
                      <td>{{ $beasiswa->asal }}</td>
											<td>{{ $beasiswa->lulus }}</td>
											<td>{{ $beasiswa->email }}</td>
											<td>{{ $beasiswa->telp }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
		</div>
	</div>
@endsection
