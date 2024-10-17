<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - NuCa Klinik</title>
    
    <!-- Tambahkan link CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f3f4f6; /* Warna latar belakang */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-size: 18px; /* Ukuran font lebih besar */
        }
        .payment-container {
            background-color: white; /* Warna latar dalam */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 450px; /* Lebar container lebih besar */
            padding: 30px; /* Padding lebih besar */
            position: relative;
        }
        .header {
            background-color: #6a00f4; /* Warna header */
            color: white; /* Warna teks header */
            padding: 20px;
            border-radius: 10px 10px 0 0; /* Membulatkan sudut atas */
            text-align: center; /* Rata tengah */
            font-size: 24px; /* Ukuran font header lebih besar */
        }
        .form-group {
            margin-bottom: 25px; /* Jarak antara form lebih besar */
        }
        label {
            font-size: 18px; /* Ukuran label lebih besar */
        }
        input.form-control, select.form-control {
            height: 50px; /* Tinggi input lebih besar */
            font-size: 18px; /* Ukuran teks input lebih besar */
        }
        .btn-pay {
            background-color: #6a00f4; /* Warna tombol Pay */
            color: white; /* Warna teks tombol */
            width: 100%; /* Lebar tombol */
            height: 55px; /* Tinggi tombol lebih besar */
            font-size: 20px; /* Ukuran font tombol lebih besar */
        }
        .btn-pay:hover {
            background-color: #5400c9; /* Warna hover tombol */
        }
        .btn-back {
            background-color: transparent; 
            border: none; 
            color: #6a00f4;
            position: absolute;
            top: 20px; 
            left: 20px; 
            font-size: 20px; /* Ukuran ikon */
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <button class="btn-back" onclick="window.history.back();">
            <i class="fas fa-arrow-left"></i> <!-- Ikon panah ke kiri -->
        </button>
        <center>
            <h5>PEMBAYARAN</h5>
        </center>
        <div class="header">
            <h5>NuCa Klinik</h5>
        </div>
        <div class="form-group">
            <label>Biaya Admin</label>
            <input type="text" class="form-control" value="Rp 10.000" disabled>
        </div>
        <div class="form-group">
            <label>Payment</label>
            <select class="form-control" id="paymentMethod">
                <option value="debit">Debit</option>
                <option value="credit">Credit</option>
                <option value="cash">Cash</option>
            </select>
        </div>
        <button class="btn btn-pay" id="payButton">Pay</button>
    </div>

    <script>
        document.getElementById('payButton').addEventListener('click', function() {
            const paymentMethod = document.getElementById('paymentMethod').value;
            
            // Menampilkan alert konfirmasi pembayaran
            alert(`Pembayaran menggunakan ${paymentMethod} berhasil!`);
            
            // Redirect ke halaman antrian.finish setelah pembayaran berhasil
            window.location.href = '{{ route('antrian.finish') }}';
        });
    </script>
</body>
</html>
