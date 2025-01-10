@extends('component.layout')
@section('isi')
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GymFit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#motivasi">Motivasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tips">Tips Gym</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bagian Hero -->
    <div class="hero">
        <h1>Jangan Berhenti, Jadilah Versi Terbaik Dirimu!</h1>
        <p>Perjalanan menuju kebugaran adalah perjalanan seumur hidup. Ayo mulai hari ini!</p>
    </div>

    <!-- Bagian Motivasi -->
    <div class="container motivation-section">
        <h2 id="motivasi" class="mb-4">Motivasi Untuk Anda</h2>
        <div class="motivation-quote">
            "Latihan bukan hanya tentang membangun otot, tetapi juga membangun karakter. Keringat hari ini adalah kebanggaan esok hari."
        </div>
        <div class="motivation-quote">
            "Setiap kali kamu ingin menyerah, ingatlah mengapa kamu memulainya."
        </div>
        <div class="motivation-quote">
            "Tidak ada jalan pintas untuk menjadi kuat. Konsistensi adalah kuncinya."
        </div>
    </div>

    <!-- Bagian Tips Gym -->
    <div class="container motivation-section">
        <h2 id="tips" class="mb-4">Tips Gym untuk Pemula</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>1. Mulai dengan Pemanasan</h4>
                <p>Sebelum memulai latihan, lakukan pemanasan selama 5-10 menit untuk menghindari cedera.</p>
            </div>
            <div class="col-md-6">
                <h4>2. Fokus pada Teknik</h4>
                <p>Jangan terlalu banyak mengangkat beban di awal. Pastikan teknik Anda benar untuk hasil yang maksimal.</p>
            </div>
            <div class="col-md-6">
                <h4>3. Jangan Lupakan Peregangan</h4>
                <p>Akhiri sesi latihan Anda dengan peregangan untuk mengurangi kekakuan otot.</p>
            </div>
            <div class="col-md-6">
                <h4>4. Konsistensi Adalah Kunci</h4>
                <p>Lebih baik latihan sedikit tetapi rutin daripada latihan berat tetapi tidak teratur.</p>
            </div>
            <div class="col-md-6">
                <h4>5. Jaga Pola Makan</h4>
                <p>Pastikan mengonsumsi makanan bernutrisi tinggi untuk mendukung hasil latihan Anda.</p>
            </div>
            <div class="col-md-6">
                <h4>6. Istirahat yang Cukup</h4>
                <p>Biarkan tubuh Anda pulih dengan tidur yang cukup setiap malam.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 GymFit. Semua Hak Dilindungi.</p>
    </footer>

 
@endsection