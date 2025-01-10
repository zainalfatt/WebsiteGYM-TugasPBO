@extends('component.layout')

@section('isi')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Gym</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-primary mb-4">Selamat Datang di Gym Sehat</h1>
        
        <h2>Deskripsi</h2>
        <p>Gym Sehat menyediakan fasilitas kebugaran dan berbagai jenis kelas olahraga untuk menunjang kesehatan dan kebugaran tubuh.</p>

        <h2>Fasilitas dan Layanan</h2>
        <ul>
            <li><strong>Total Anggota:</strong> 120 anggota aktif</li>
            <li><strong>Kelas Olahraga:</strong> 25 kelas dengan pilihan aktivitas seperti yoga, zumba, dan body pump</li>
            <li><strong>Kegiatan Khusus:</strong> 15 kegiatan rutin termasuk latihan kelompok dan kompetisi</li>
        </ul>

        <h2>Jadwal Kelas Hari Ini</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jam</th>
                    <th>Nama Kelas</th>
                    <th>Instruktur</th>
                    <th>Ruangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>08:00 - 09:00</td>
                    <td>Yoga</td>
                    <td>Lisa</td>
                    <td>Ruangan A</td>
                </tr>
                <tr>
                    <td>10:00 - 11:00</td>
                    <td>Body Pump</td>
                    <td>John</td>
                    <td>Ruangan B</td>
                </tr>
                <tr>
                    <td>16:00 - 17:00</td>
                    <td>Zumba</td>
                    <td>Susan</td>
                    <td>Ruangan C</td>
                </tr>
            </tbody>
        </table>

        <h2>Kegiatan Mendatang</h2>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Kompetisi Push-Up
                <span class="badge bg-primary rounded-pill">10 Jan</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Lomba Angkat Beban
                <span class="badge bg-primary rounded-pill">20 Jan</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Workshop Kesehatan
                <span class="badge bg-primary rounded-pill">25 Jan</span>
            </li>
        </ul>

        <h2>Visi</h2>
        <p>Menjadi pusat kebugaran yang terdepan dalam menyediakan program olahraga berkualitas tinggi dengan harga yang kompetitif serta berfokus pada pencapaian kesehatan dan kebugaran optimal bagi anggotanya.</p>

        <h2>Misi</h2>
        <ul>
            <li>Menyediakan berbagai kelas kebugaran yang sesuai dengan kebutuhan semua kelompok usia dan tingkat kebugaran.</li>
            <li>Membangun komunitas olahraga yang positif dan inspiratif.</li>
            <li>Mengadakan acara yang mendorong partisipasi dan motivasi anggota untuk terus aktif bergerak.</li>
        </ul>
    </div>
</body>
</html>

@endsection