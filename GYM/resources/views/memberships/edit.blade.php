@extends('component.layout')

@section('isi')
<div class="container">
    <h1>Edit Membership</h1>
    <form action="{{ route('memberships.update', $membership) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Membership</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $membership->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $membership->price }}" required>
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input type="text" name="duration" id="duration" class="form-control" value="{{ $membership->duration }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
