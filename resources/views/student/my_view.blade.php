@extends("layouts.app")

@section("content")
	<h1>Berikut Data Laporan Nilai Mahasiswa : </h1>
	<h4>Mata Kuliah 	: 	{{$course}}</h4>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">NRP</th>
				<th scope="col">Nama Mahasiswa</th>
				<th scope="col">Nilai Tugas</th>
				<th scope="col">Nilai Kuis</th>
				<th scope="col">Nilai UTS</th>
				<th scope="col">Nilai UAS</th>
				<th scope="col">Nilai Akhir</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">{{$code}}</th>
				<th scope="row">{{$name}}</th>
				<th scope="row">{{$task}}</th>
				<th scope="row">{{$quiz}}</th>
				<th scope="row">{{$mid_term}}</th>
				<th scope="row">{{$final}}</th>
				<th scope="row">{{$grade}}</th>
			</tr>
		</tbody>
	</table>
@stop