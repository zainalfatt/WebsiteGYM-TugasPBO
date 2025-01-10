@extends('component.layout')

@section('isi')
<div class="container">
    <h1>Daftar Membership</h1>
    <a href="{{ route('memberships.create') }}" class="btn btn-primary">Tambah Membership</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Durasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($memberships as $membership)
            <tr>
                <td>{{ $membership->name }}</td>
                <td>Rp {{ number_format($membership->price, 2) }}</td>
                <td>{{ $membership->duration }}</td>
                <td>
                    <a href="{{ route('memberships.edit', $membership) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('memberships.destroy', $membership) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
