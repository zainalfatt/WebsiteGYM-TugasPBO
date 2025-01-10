@extends('component.layout')
@section('isi')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GymExpert</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#trivia">Trivia</a>
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
        <h1>Kenali Alat Gym dan Fungsinya!</h1>
        <p>Temukan informasi lengkap tentang alat-alat gym yang ada untuk membantu Anda berlatih dengan lebih efektif.</p>
    </div>

    <!-- Bagian Trivia Alat Gym -->
    <div class="container trivia-section">
        <h2 id="trivia" class="mb-4">Trivia Alat Gym</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>1. Bench Press</h4>
                <p>
                    Bench Press adalah salah satu alat paling populer di gym dan sering digunakan untuk melatih kekuatan tubuh bagian atas, khususnya otot dada (pectoralis), bahu (deltoid), dan trisep.
                </p>
                <p><strong>Cara Penggunaan:</strong> Anda berbaring di bangku datar dengan barbell yang terpasang di rak. Barbell diangkat dengan kedua tangan, lalu diturunkan perlahan ke arah dada sebelum diangkat kembali ke posisi awal.</p>
                <p><strong>Manfaat:</strong> Latihan ini sangat efektif untuk meningkatkan kekuatan otot dada dan membentuk tubuh bagian atas. Bench press juga memperkuat otot pendukung seperti trisep dan deltoid depan.</p>
            </div>
            <div class="col-md-6">
                <h4>2. Treadmill</h4>
                <p>
                    Treadmill adalah alat gym yang dirancang untuk latihan kardio, seperti lari atau berjalan. Mesin ini memungkinkan pengguna untuk mengatur kecepatan, sudut kemiringan, dan durasi latihan.
                </p>
                <p><strong>Cara Penggunaan:</strong> Cukup nyalakan mesin, pilih kecepatan, dan mulailah berjalan atau berlari sesuai dengan tingkat kebugaran Anda.</p>
                <p><strong>Manfaat:</strong> Treadmill membantu meningkatkan daya tahan jantung dan paru-paru, membakar kalori, serta memperkuat otot kaki. Selain itu, pengguna bisa berolahraga dalam ruangan tanpa terpengaruh oleh cuaca.</p>
            </div>
            <div class="col-md-6">
                <h4>3. Lat Pulldown</h4>
                <p>
                    Lat Pulldown adalah alat gym yang dirancang khusus untuk melatih otot punggung bagian atas, termasuk latissimus dorsi, trapezius, dan rhomboid.
                </p>
                <p><strong>Cara Penggunaan:</strong> Duduk di kursi yang tersedia, genggam pegangan alat dengan kedua tangan, lalu tarik pegangan tersebut ke arah dada Anda sambil menjaga punggung tetap lurus.</p>
                <p><strong>Manfaat:</strong> Latihan ini efektif untuk memperkuat otot punggung, meningkatkan postur tubuh, dan membantu membentuk tubuh bagian atas yang proporsional.</p>
            </div>
            <div class="col-md-6">
                <h4>4. Dumbbell</h4>
                <p>
                    Dumbbell adalah alat gym serbaguna yang dapat digunakan untuk berbagai jenis latihan, mulai dari pembentukan otot hingga meningkatkan keseimbangan tubuh.
                </p>
                <p><strong>Cara Penggunaan:</strong> Pegang dumbbell di kedua tangan dan lakukan gerakan seperti bench press, shoulder press, atau bicep curl sesuai dengan otot yang ingin Anda latih.</p>
                <p><strong>Manfaat:</strong> Dumbbell membantu meningkatkan kekuatan otot, memperbaiki stabilitas, dan fleksibilitas tubuh, karena setiap sisi tubuh bekerja secara independen.</p>
            </div>
            <div class="col-md-6">
                <h4>5. Kettlebell</h4>
                <p>
                    Kettlebell adalah alat berbentuk seperti bola dengan pegangan yang digunakan untuk latihan kekuatan dan daya tahan.
                </p>
                <p><strong>Cara Penggunaan:</strong> Pegang kettlebell dengan satu atau dua tangan, lakukan gerakan seperti ayunan, squat, atau deadlift.</p>
                <p><strong>Manfaat:</strong> Kettlebell membantu meningkatkan kekuatan otot, membakar kalori, dan melatih keseimbangan serta koordinasi tubuh.</p>
            </div>
            <div class="col-md-6">
                <h4>6. Sepeda Statis</h4>
                <p>
                    Sepeda Statis adalah alat yang ideal untuk latihan kardio di rumah atau di gym. Alat ini memungkinkan pengguna untuk mengatur intensitas latihan dengan mengubah resistensi pedal.
                </p>
                <p><strong>Cara Penggunaan:</strong> Duduk di atas kursi sepeda, atur ketinggian kursi sesuai kenyamanan, dan mulailah mengayuh pedal dengan kecepatan yang diinginkan.</p>
                <p><strong>Manfaat:</strong> Membantu meningkatkan daya tahan jantung, membakar kalori, dan memperkuat otot kaki serta paha.</p>
            </div>
            <div class="col-md-6">
                <h4>7. Pull-Up Bar</h4>
                <p>
                    Pull-Up Bar adalah alat sederhana yang digunakan untuk latihan berat badan, khususnya untuk melatih otot punggung, bisep, dan bahu.
                </p>
                <p><strong>Cara Penggunaan:</strong> Gantungkan tubuh di pull-up bar dengan tangan selebar bahu, tarik tubuh ke atas hingga dagu melewati bar, lalu turunkan perlahan.</p>
                <p><strong>Manfaat:</strong> Pull-up memperkuat otot punggung atas, bisep, dan meningkatkan kekuatan cengkeraman.</p>
            </div>
            <div class="col-md-6">
                <h4>8. Cable Machine</h4>
                <p>
                    Cable Machine adalah alat gym multifungsi yang menggunakan kabel dan beban untuk berbagai jenis latihan kekuatan.
                </p>
                <p><strong>Cara Penggunaan:</strong> Pilih pegangan atau attachment yang sesuai, atur tinggi kabel, dan lakukan gerakan seperti crossover atau tricep pushdown.</p>
                <p><strong>Manfaat:</strong> Fleksibilitas untuk melatih berbagai kelompok otot, meningkatkan kekuatan dan stabilitas tubuh.</p>
            </div>
            <div class="col-md-6">
                <h4>9. Smith Machine</h4>
                <p>
                    Smith Machine adalah alat dengan barbell yang dipasang di rel vertikal untuk latihan kekuatan dengan keamanan lebih.
                </p>
                <p><strong>Cara Penggunaan:</strong> Atur ketinggian barbell, tambahkan beban, dan lakukan gerakan seperti squat atau bench press.</p>
                <p><strong>Manfaat:</strong> Membantu menjaga stabilitas dan mengurangi risiko cedera selama latihan berat.</p>
            </div>
            <div class="col-md-6">
                <h4>10. Rowing Machine</h4>
                <p>
                    Rowing Machine adalah alat gym yang dirancang untuk latihan kardio yang melibatkan hampir seluruh tubuh, dengan gerakan menyerupai mendayung perahu.
                </p>
                <p><strong>Cara Penggunaan:</strong> Duduk di kursi, pegang pegangan, dan dorong kaki ke depan sambil menarik pegangan menuju dada. Kemudian kembali ke posisi awal dengan gerakan yang terkontrol.</p>
                <p><strong>Manfaat:</strong> Membantu meningkatkan daya tahan jantung, membakar kalori, dan melatih hampir semua otot tubuh, termasuk punggung, lengan, dan kaki.</p>
            </div>
            <div class="col-md-6">
                <h4>11. Leg Press</h4>
                <p>
                    Leg Press adalah alat yang digunakan untuk melatih otot kaki, termasuk quadriceps, hamstrings, dan glutes.
                </p>
                <p><strong>Cara Penggunaan:</strong> Duduk di mesin dengan kaki di plat, dorong beban dengan kaki hingga lutut lurus, lalu turunkan kembali beban ke posisi semula.</p>
                <p><strong>Manfaat:</strong> Latihan ini sangat efektif untuk meningkatkan kekuatan otot kaki, terutama bagi mereka yang ingin memperkuat otot quadriceps dan glutes.</p>
            </div>
            <div class="col-md-6">
                <h4>12. Leg Curl Machine</h4>
                <p>
                    Leg Curl Machine dirancang untuk melatih otot hamstrings (bagian belakang paha).
                </p>
                <p><strong>Cara Penggunaan:</strong> Berbaring atau duduk di mesin, letakkan kaki di pad, dan tarik beban dengan menekuk lutut ke arah bokong Anda.</p>
                <p><strong>Manfaat:</strong> Membantu memperkuat otot hamstrings, meningkatkan fleksibilitas, dan membantu keseimbangan otot paha depan dan belakang.</p>
            </div>
            <div class="col-md-6">
                <h4>13. Ab Crunch Machine</h4>
                <p>
                    Ab Crunch Machine digunakan untuk melatih otot perut, khususnya otot rectus abdominis.
                </p>
                <p><strong>Cara Penggunaan:</strong> Duduk di mesin, letakkan tangan di pegangan, dan dorong tubuh ke depan dengan mengontraksikan otot perut, lalu kembali ke posisi semula.</p>
                <p><strong>Manfaat:</strong> Membantu membentuk dan memperkuat otot perut, serta meningkatkan stabilitas tubuh bagian atas.</p>
            </div>
            <div class="col-md-6">
                <h4>14. Seated Row Machine</h4>
                <p>
                    Seated Row Machine adalah alat yang digunakan untuk melatih otot punggung, terutama otot latissimus dorsi dan trapezius.
                </p>
                <p><strong>Cara Penggunaan:</strong> Duduk di mesin, genggam pegangan, tarik pegangan ke arah dada, dan kembali ke posisi semula dengan gerakan yang terkontrol.</p>
                <p><strong>Manfaat:</strong> Memperkuat otot punggung, meningkatkan postur tubuh, dan membantu membentuk tubuh bagian atas yang lebih kuat.</p>
            </div>
            <div class="col-md-6">
                <h4>15. Hyperextension Bench</h4>
                <p>
                    Hyperextension Bench digunakan untuk melatih otot punggung bagian bawah, glutes, dan hamstrings.
                </p>
                <p><strong>Cara Penggunaan:</strong> Berbaring dengan posisi tubuh di atas bench, kaki terkunci di pad, dan angkat tubuh bagian atas dengan menekankan otot punggung bawah, kemudian turunkan perlahan.</p>
                <p><strong>Manfaat:</strong> Membantu memperkuat punggung bawah, glutes, dan otot core, serta mencegah cedera punggung bawah.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 GymExpert - Semua Hak Dilindungi</p>
    </footer>
   
@endsection