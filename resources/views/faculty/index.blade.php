@extends("layouts.app")

<?php $no=1; ?>
@section("content")
    <h3>Data Program Studi</h3>
    <a href="/faculty/create" class="btn btn-success mb-2">Tambah Data</a>
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
				<th> Nama </th>
				<th> Daftar Mahasiswa </th>
                <th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($faculties as $faculty)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$faculty->name}}</td>
{{--                    <td><a href="/faculty/{{$faculty->id}}">Lihat</a></td>--}}
                    <td><a href="/faculty/{{$faculty->id}}">{{$faculty->students()->count()}} Mahasiswa</a></td>
                    <td>
                        <a href="/faculty/edit/{{$faculty->id}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="/faculty/{{$faculty->id}}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
