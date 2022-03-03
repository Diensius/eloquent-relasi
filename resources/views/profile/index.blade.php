@extends('/adminlte/master/master')

@section('title')
    Update Profile
@endsection

@section('content')
    <form action="/profile/{{$profile->id}}" method="POST">
        @csrf
        @method('put')

        <div class="mb-3">
            <label>Email</label>
            <input type="text" disabled value="{{$profile->user->email}}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" disabled value="{{$profile->user->name}}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="text" name="umur" value="{{$profile->umur}}" class="form-control">
        </div>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Biodata</label>
            <textarea name="biodata" class="form-control" rows="3">{{$profile->biodata}}</textarea>
        </div>
        @error('biodata')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3">{{$profile->alamat}}</textarea>
        </div>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
@endsection