@extends('component.layout')
@section('isi')
<div class="container">
    <h1 class="text-center">To-Do List Olahraga Anak Gym</h1>

    <!-- Form untuk menambah aktivitas -->
    <div class="card my-4">
        <div class="card-body">
            <form action="{{ route('todo.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <input type="text" name="activity" class="form-control mt-4" placeholder="Masukkan aktivitas olahraga" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="start_time">Mulai:</label>
                        <input type="time" name="start_time" class="form-control" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="end_time">Selesai:</label>
                        <input type="time" name="end_time" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 ">
                        <button type="submit" class="btn btn-primary w-80 mt-4 ml-5 ">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Daftar aktivitas -->
    <div class="card">
        <div class="card-header">Daftar Aktivitas</div>
        <div class="card-body">
            @if($todos->isEmpty())
                <p class="text-center">Belum ada aktivitas yang ditambahkan.</p>
            @else
                <ul class="list-group">
                    @foreach($todos as $todo)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <input type="checkbox" onchange="document.getElementById('form-complete-{{ $todo->id }}').submit();" {{ $todo->is_completed ? 'checked' : '' }}>
                                <label class="ms-2 {{ $todo->is_completed ? 'text-decoration-line-through' : '' }}">
                                    {{ $todo->activity }} - <small>{{ substr($todo->start_time, 0, 5) }} - {{ substr($todo->end_time, 0, 5) }}</small>

                                </label>
                            </div>
                            <form id="form-complete-{{ $todo->id }}" action="{{ route('todo.update', $todo->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="is_completed" value="{{ $todo->is_completed ? 0 : 1 }}">
                            </form>

                            <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @endif

            <!-- Default daftar aktivitas olahraga -->
            <h5 class="mt-4">Daftar Aktivitas Rekomendasi</h5>
            <ul class="list-group">
                <li class="list-group-item">Angkat Beban (Weightlifting)</li>
                <ul class="list-group ps-4">
                    <li class="list-group-item">Bench press</li>
                    <li class="list-group-item">Deadlift</li>
                    <li class="list-group-item">Squat</li>
                    <li class="list-group-item">Bicep curl</li>
                    <li class="list-group-item">Tricep extension</li>
                </ul>
                <li class="list-group-item">Latihan Kardio</li>
                <ul class="list-group ps-4">
                    <li class="list-group-item">Lari (treadmill/outdoor)</li>
                    <li class="list-group-item">Sepeda statis</li>
                    <li class="list-group-item">Rowing machine</li>
                    <li class="list-group-item">High-Intensity Interval Training (HIIT)</li>
                </ul>
                <li class="list-group-item">Latihan Fungsional</li>
                <ul class="list-group ps-4">
                    <li class="list-group-item">Pull-up</li>
                    <li class="list-group-item">Push-up</li>
                    <li class="list-group-item">Plank</li>
                    <li class="list-group-item">Burpee</li>
                </ul>
                <li class="list-group-item">Latihan Kekuatan</li>
                <ul class="list-group ps-4">
                    <li class="list-group-item">Overhead press</li>
                    <li class="list-group-item">Pull-over</li>
                    <li class="list-group-item">Power clean</li>
                </ul>
            </ul>
        </div>
    </div>
</div>

    
@endsection