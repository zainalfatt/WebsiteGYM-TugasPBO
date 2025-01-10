@extends('component.layout')

@section('isi')
<div class="container">
    <h1>Tambah Membership</h1>
    <form action="{{ route('memberships.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Membership</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input type="text" name="duration" id="duration" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
