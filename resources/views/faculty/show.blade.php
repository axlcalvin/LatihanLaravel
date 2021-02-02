@extends("layouts.app")

<?php $no=1; ?>
@section("content")
    <h3>Lihat Data Mahasiswa Pada Prodi # {{$faculty->name}}</h3>

	<table class="table table-striped">
		<thead>
			<tr>
				<th> No </th>
				<th> NRP </th>
				<th> Nama Mahasiswa </th>
			</tr>
		</thead>
		<tbody>
			@if($faculty->students)
                @foreach ($faculty->students as $student)
				<tr>
					<td>{{$no++}}</td>
                    <td>{{$student->code}}</td>
					<td>{{$student->name}}</td>
				</tr>
			    @endforeach
            @endif
		</tbody>
	</table>
@endsection
