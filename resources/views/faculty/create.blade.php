@extends("layouts.app")

@section("content")
    <div class="col-md-8 offset-md-2">
        <h3>Tambah Program Studi</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <form method="post" action="{{ route('faculty.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama Program Studi</label>
                <input type="text" class="form-control" name="name"/>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
