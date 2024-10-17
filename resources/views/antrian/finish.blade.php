<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finish Pendaftaran Antrian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        .success-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin: 20px 0;
        }

        .text-success {
            color: #28a745;
        }

        .btn-close {
            background-color: #6a00f4;
            color: white;
            float: right;
        }

        .btn-close:hover {
            background-color: #5400c9;
        }

        .info-section {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .highlight {
            font-weight: bold;
            color: #6a00f4;
        }

        .text-left {
            text-align: left;
            margin-bottom: 20px;
        }

        .btn-back {
            background-color: transparent;
            border: none;
            color: #6a00f4;
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>

<body>
    <div class="container my-5 text-center">
        <button class="btn-back" onclick="window.history.back();">
            <i class="fas fa-arrow-left fa-lg"></i>
        </button>

        <h3>Finish</h3>
        <img src="/img/success.png" alt="Success" class="success-icon">
        <p class="text-success mt-2">Pesanan Anda telah berhasil.</p>

        <div class="info-section">
            <p><strong>Tanggal & Waktu:</strong> <span class="highlight">{{ $janji_date ?? 'Tidak tersedia' }}</span>
            </p>
            <p><strong>Nomor Antrian:</strong> <span class="highlight">{{ $antrian ?? 'Tidak tersedia' }}</span></p>
            <p><strong>Dokter:</strong> <span class="highlight">{{ $dokter ?? 'Tidak tersedia' }}</span></p>
            <p><strong>Ruang Praktik:</strong> <span class="highlight">{{ $ruang_praktek ?? 'Tidak tersedia' }}</span>
            </p>

        </div>

        <p class="text-left">
            Pesanan Anda telah berhasil.<br>
            Tolong simpan data pribadi Anda jangan sampai hilang.
            <a href="{{ url('/') }}" class="btn btn-close">Close</a>
        </p>
    </div>
</body>

</html>
