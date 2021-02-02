@extends("layouts.app")

<?php $no=1; ?>
@section("content")
    <h3>Data Mahasiswa</h3>
    <a href="/student/create" class="btn btn-success mb-2">Tambah Data</a>
    <br />
    <!-- <div class="col-sm-12"> -->
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
    <!-- </div> -->
	<table class="table table-striped">
		<thead>
			<tr>
				<th> No </th>
				<th> NRP </th>
				<th> Nama </th>
				<th> Jenis Kelamin </th>
				<th> Tempat Lahir </th>
				<th> Tanggal Lahir </th>
                <th> Prodi </th>
                <th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$student->code}}</td>
					<td>{{$student->name}}</td>
					<td>{{$student->gender == "P" ? "Pria" : "Wanita"}}</td>
					<td>{{$student->birth_place}}</td>
					<td>{{$student->birth_date}}</td>
                    <td>{{$student->faculty->name}}</td>
					<td>
                        <a href="/student/edit/{{$student->id}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="/student/{{$student->id}}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop
