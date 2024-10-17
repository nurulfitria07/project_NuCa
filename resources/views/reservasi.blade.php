<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .calendar-wrapper,
        .time-wrapper {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .time-btn {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            background-color: #f8f9fa;
            transition: background-color 0.3s;
        }

        .time-btn.active {
            background-color: #283cd7;
            color: white;
        }

        .next-btn {
            background-color: #283cd7;
            color: white;
        }

        .next-btn:hover {
            background-color: #283cd7;
        }

        .instruction {
            font-size: 18px;
            color: #1f1f1f;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container text-center mt-5">
        <h2>Janji Temu</h2>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <form action="{{ route('janji.store') }}" method="POST" onsubmit="return handleSubmit();">
                    @csrf
                    <input type="hidden" name="janji_date" id="janji_date">
                    <input type="hidden" name="janji_time" id="janji_time">

                    <!-- Kalender -->
                    <center>
                        <div class="calendar-wrapper">
                            <input type="text" id="calendar" class="form-control" placeholder="Pilih Tanggal">
                        </div>
                    </center>

                    <!-- Pilih Dokter (Dropdown) -->
                    <div class="mt-3">
                        <label for="id_dokter" class="form-label">Pilih Dokter</label>
                        <select name="id_dokter" id="id_dokter" class="form-select" required>
                            <option value="" disabled selected>Pilih Dokter</option>
                            <option value="1" data-room="Ruang A">Dr. Cha Eun Jae - Spesialis Jantung</option>
                            <option value="2" data-room="Ruang B">Dr. Seo Woo Jin - Penyakit Dalam</option>
                            <option value="3" data-room="Ruang C">Dr. Park Eun Tak - Gigi</option>
                            <option value="4" data-room="Ruang D">Dr. Kang Dong Joo - Bedah</option>
                        </select>
                    </div>


            </div>

            <!-- Pilih Waktu -->
            <div class="col-md-4">
                <div class="time-wrapper">
                    <h5>Pilih Waktu</h5>
                    <button class="time-btn" data-time="09:00">09:00</button>
                    <button class="time-btn" data-time="10:00">10:00</button>
                    <button class="time-btn" data-time="11:00">11:00</button>
                    <button class="time-btn" data-time="12:00">12:00</button>
                    <button class="time-btn" data-time="13:00">13:00</button>
                    <button class="time-btn" data-time="14:00">14:00</button>
                    <button class="time-btn" data-time="15:00">15:00</button>
                    <button class="time-btn" data-time="16:00">16:00</button>
                    <button class="time-btn" data-time="17:00">17:00</button>
                </div>
            </div>
        </div>

        <!-- Next Button -->
        <div class="mt-4">
            <button type="submit" class="btn next-btn">Next</button>
            </form>
        </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Calendar
        flatpickr("#calendar", {
            inline: true,
            dateFormat: "Y-m-d",
            onChange: function(selectedDates, dateStr, instance) {
                document.getElementById('janji_date').value = dateStr;
            }
        });

        // Handle time button click
        const timeButtons = document.querySelectorAll('.time-btn');
        timeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                timeButtons.forEach(button => button.classList.remove('active'));
                btn.classList.add('active');
                document.getElementById('janji_time').value = btn.getAttribute('data-time');
            });
        });

        // Handle form submission
        function handleSubmit() {
            // Pastikan semua data sudah terisi sebelum berpindah
            const dokterId = document.getElementById('id_dokter').value;
            const janjiDate = document.getElementById('janji_date').value;
            const janjiTime = document.getElementById('janji_time').value;

            if (dokterId && janjiDate && janjiTime) {
                return true; // Mengizinkan pengiriman form
            } else {
                alert("Pastikan semua data telah diisi.");
                return false; // Mencegah pengiriman form
            }
        }
    </script>

</body>

</html>
