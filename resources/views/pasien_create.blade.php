<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            height: 100%;
        }

        /* Container */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h2 {
            font-size: 24px;
            margin: 0;
        }

        .back-btn, .menu-icon {
            font-size: 24px;
            text-decoration: none;
            color: #333;
        }

        /* Form Section */
        .form-section {
            display: flex;
            justify-content: space-between;
        }

        .form-left, .form-right {
            width: 48%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #666;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        textarea.form-control {
            resize: none;
        }

        /* Next Button */
        .next-btn {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #6a00f4;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #5400c9;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('pasien.store') }}">
        @csrf
        <!-- Container -->
    <div class="container">
        <!-- Header -->
        <div class="header">
            <a href="/reservasi" class="back-btn">&#8592;</a>
            <h2>Data Diri</h2>
            <div class="menu-icon">&#x2630;</div>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <!-- Left side - Personal Info -->
            <div class="form-left">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" class="form-control" placeholder="Masukkan NIK">
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select id="gender" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label for="dob">Tanggal Lahir</label>
                    <input type="date" id="dob" class="form-control" placeholder="Masukkan Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="phone">No Telepon</label>
                    <input type="text" id="phone" class="form-control" placeholder="Masukkan No Telepon">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" class="form-control" placeholder="Masukkan Alamat">
                </div>
            </div>

            <!-- Right side - Message -->
            <div class="form-right">
                <label for="message">Keluhan</label>
                <textarea id="message" class="form-control" rows="6" placeholder="Masukkan Keluhan"></textarea>
            </div>
        </div>

        <!-- Next Button -->
        <div class="next-btn">
            <button type="button" class="btn btn-primary" id="next-btn">Next</button>
        </div>
    </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('next-btn').addEventListener('click', function() {
            window.location.href = '{{ route('janji.create') }}';

        });
    </script>
</body>
</html>
