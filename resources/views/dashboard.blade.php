<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuCa Klinik Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Add any external CSS or icons like FontAwesome here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="NuCa Klinik Logo" class="logo-img">
                <h2></h2>
            </div>
            <nav class="sidebar-menu">
                <ul>
                    <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Data Pasien</a></li>
                    <li><a href="#"><i class="fas fa-user-md"></i> Data Dokter</a></li>
                    <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="dashboard-header">
                <h1>Welcome, Dr. Sharina Khan</h1>
                <div class="header-search">
                    <input type="text" placeholder="Search...">
                    <i class="fas fa-search"></i>
                </div>
            </header>

            <section class="dashboard-cards">
                <div class="card">
                    <i class="fas fa-user-check"></i>
                    <h3>300</h3>
                    <p>Data Pasien</p>
                </div>
                <div class="card">
                    <i class="fas fa-user-check"></i>
                    <h3>300</h3>
                    <p>Data Pasien</p>
                </div>
                <div class="card">
                    <i class="fas fa-user-check"></i>
                    <h3>300</h3>
                    <p>Data Pasien</p>
                </div>
                <div class="card">
                    <i class="fas fa-user-check"></i>
                    <h3>300</h3>
                    <p>Data Pasien</p>
                </div>
            </section>

            <section class="dashboard-graph">
                <h2>Grafik</h2>
                <!-- Add a chart or any graph element here -->
                <canvas id="patientChart"></canvas>
            </section>

            <section class="doctor-attendance">
                <h2>NuCa Poli</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Spesialis Penyakit Dalam</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dr. Aisha Ezra</td>
                            <td><span class="badge bg-success">Hadir</span></td>
                        </tr>
                        <tr>
                            <td>Dr. Radjan Kertara</td>
                            <td><span class="badge bg-danger">Tidak Hadir</span></td>
                        </tr>
                        <tr>
                            <td>Dr. Shandra Putri</td>
                            <td><span class="badge bg-success">Hadir</span></td>
                        </tr>
                        <tr>
                            <td>Dr. Kevin Sanjaya</td>
                            <td><span class="badge bg-danger">Tidak Hadir</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');

            // Toggle the 'closed' class to hide or show the sidebar
            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('sidebar-closed');
        }
    </script>

    <script>
        function toggleMenu() {
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('active');
        }

        const ctx = document.getElementById('patientChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Pasien Baru',
                    borderColor: 'blue',
                    data: [50, 100, 150, 200, 250, 300, 350, 400]
                }, {
                    label: 'Pasien Lama',
                    borderColor: 'lightblue',
                    data: [30, 60, 90, 120, 150, 180, 210, 240]
                }]
            }
        });
    </script>
</body>

</html>