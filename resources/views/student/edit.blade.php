@extends("layouts.app")

@section("content")
    <div class="col-md-8 offset-md-2">
        <h3>Edit Mahasiswa</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <form method="post" action="/student/{{ $student->id }}/edit">
            @csrf
            <div class="form-group">
                <label for="code">NRP</label>
                <input type="text" class="form-control" name="code" readonly value="{{ $student->code }}"/>
            </div>

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}"/>
            </div>

            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <input type="radio" class="form-control-inline" name="gender" value="P"> Pria
                <input type="radio" class="form-control-inline" name="gender" value="W"> Wanita
            </div>
            <div class="form-group">
                <label for="birth_place">Tempat Lahir</label>
                <input type="text" class="form-control" name="birth_place" value="{{ $student->birth_place }}"/>
            </div>
            <div class="form-group">
                <label for="birth_date">Tanggal Lahir</label>
                <input type="date" class="form-control" name="birth_date" value="{{ $student->birth_date }}"/>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@stop
