@extends('layout.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h3 {
            color: white;
            font-size: 24px;
            text-align: center;
        }
        .bg-primary {
            background-color: blue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 170px;
            margin: 30px 130px;
            border-radius: 20px;
        }
        .cards-container {
            display: flex;
            justify-content: space-between;
            margin: 50px 130px;
        }
        .card {
            background-color: #f4f4f4;
            width: 30%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card img {
            width: 100%;
            height: 220px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .card h4 {
            margin-bottom: 10px;
        }
        .card p {
            font-size: 16px;
            color: #333;
        }

        footer {
            color: #333;
            text-align :center;
        }
    </style>
</head>
<body>
    <div class="bg-primary">
        <h3>Selamat Datang!</h3>
    </div>

    <div class="cards-container">
        <div class="card">
            <img src="assets/download.jpeg" alt="Adiwiyata">
            <h4>Adiwiyata</h4>
            <p>Di tengah hiruk-pikuk kehidupan perkotaan, SMK Wikrama menawarkan sesuatu yang unik dan menyegarkan. Atap gedung sekolah ini dihiasi dengan keindahan alam berupa pohon-pohon, bunga-bunga, dan sayuran hidroponik. Mari kita telusuri keunikan SMK Wikrama yang membuatnya berbeda!</p>
        </div>
        <div class="card">
            <img src="assets/download2.jpg" alt="Sekolah Pusat Keunggulan">
            <h4>Sekolah Pusat Keunggulan</h4>
            <p>SMK Wikrama Kota Bogor ditetapkan sebagai pelaksana Program Sekolah Menengah Kejuruan Pusat Keunggulan (SMK PK). Keputusan ini merupakan pengakuan atas prestasi sekolah dalam pendidikan vokasi.</p>
        </div>
        <div class="card">
            <img src="assets/images.jpeg" alt="Paskibra SMK Wikrama">
            <h4>Paskibra SMK Wikrama</h4>
            <p>Tim Paskibra SMK Wikrama meraih prestasi gemilang di Lomba Keterampilan Baris-Berbaris (LKBB) Rampak Gerak Smanic 2023. Prestasi ini adalah hasil dari kerja keras dan dedikasi seluruh anggota tim.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 SMK Wikrama Bogor. All Rights Reserved.</p>
    </footer>    
</body>
</html>
@endsection
