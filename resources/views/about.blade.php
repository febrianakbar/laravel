@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang SMK Wikrama</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #007bff; /* Bootstrap primary color */
            color: #fff;
            padding: 20px 0; /* Adjusted padding for less vertical space */
            border-bottom: #ccc 3px solid;
            text-align: center;
        }
        header h2 {
            margin: 0;
        }
        .main-content {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            border-radius: 8px;
            position: relative;
            top: -20px; /* Move content up */
        }
        .main-content h2 {
            color: #333;
        }
        .main-content p {
            margin: 0 0 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h2>Tentang SMK Wikrama</h2>
        </div>
    </header>

    <div class="container">
        <div class="main-content">
            <h2>Selamat Datang di SMK Wikrama</h2>
            <p>SMK Wikrama adalah salah satu sekolah menengah kejuruan yang terkemuka di wilayah ini, yang berkomitmen untuk menyediakan pendidikan berkualitas dan pelatihan keterampilan yang relevan dengan kebutuhan industri. Kami berdedikasi untuk membekali siswa dengan pengetahuan dan keterampilan yang diperlukan untuk sukses di dunia kerja.</p>
            <p>Didirikan pada tahun 2000, SMK Wikrama menawarkan berbagai program studi yang dirancang untuk mempersiapkan siswa memasuki berbagai sektor industri. Dengan fasilitas modern dan tenaga pengajar yang berpengalaman, kami berusaha memberikan pengalaman belajar yang terbaik bagi setiap siswa.</p>
            <h3>Visi dan Misi</h3>
            <p><strong>Visi:</strong> Menjadi sekolah menengah kejuruan yang unggul dalam pendidikan dan pelatihan kejuruan di tingkat nasional.</p>
            <p><strong>Misi:</strong> Mendidik siswa dengan keterampilan dan pengetahuan yang relevan untuk mempersiapkan mereka memasuki dunia kerja, serta mendukung pengembangan profesionalisme dan keahlian yang berkelanjutan.</p>
            <h3>Program Studi</h3>
            <ul>
                <li>Teknik Komputer dan Jaringan</li>
                <li>Akuntansi</li>
                <li>Multimedia</li>
                <li>Rekayasa Perangkat Lunak</li>
            </ul>
        </div>
    </div>
</body>
</html>
@endsection
