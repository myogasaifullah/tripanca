<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tripanca Air Mineral</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #64748b;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #1e293b;
            --light: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        body {
            background-color: #f1f5f9;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, var(--dark) 0%, #0f172a 100%);
            color: white;
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
        }

        .logo {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #334155;
        }

        .logo h2 {
            color: var(--primary);
            font-size: 1.5rem;
        }

        .logo span {
            color: white;
        }

        .nav-links {
            padding: 20px 0;
        }

        .nav-links li {
            list-style: none;
            padding: 12px 20px;
            transition: all 0.3s;
        }

        .nav-links li.active {
            background: rgba(37, 99, 235, 0.2);
            border-left: 4px solid var(--primary);
        }

        .nav-links li:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-links a {
            color: #cbd5e1;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-links i {
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-bar {
            flex: 1;
            max-width: 400px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .bg-primary { background: #dbeafe; color: var(--primary); }
        .bg-success { background: #dcfce7; color: var(--success); }
        .bg-warning { background: #fef3c7; color: var(--warning); }
        .bg-danger { background: #fee2e2; color: var(--danger); }

        .stat-info h3 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .stat-info p {
            color: var(--secondary);
            font-size: 0.9rem;
        }

        /* Charts Section */
        .charts-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .chart-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .chart-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
        }

        .chart-header h3 {
            font-size: 1.2rem;
        }

        /* Recent Orders */
        .recent-orders {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #f8fafc;
            font-weight: 600;
            color: var(--dark);
        }

        .status {
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status.completed { background: #dcfce7; color: #166534; }
        .status.pending { background: #fef3c7; color: #92400e; }
        .status.processing { background: #dbeafe; color: #1e40af; }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            .sidebar .logo h2, .nav-links span {
                display: none;
            }
            .main-content {
                margin-left: 70px;
            }
            .charts-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <h2>Tripanca<span>Admin</span></h2>
        </div>
        <ul class="nav-links">
            <li class="active"><a href="#"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-box"></i> <span>Produk</span></a></li>
            <li><a href="#"><i class="fas fa-warehouse"></i> <span>Stok</span></a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> <span>Laporan</span></a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i> <span>Penjualan</span></a></li>
            <li><a href="#"><i class="fas fa-users"></i> <span>Users</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="search-bar">
                <input type="text" placeholder="Cari produk, laporan, atau pengguna...">
            </div>
            <div class="user-info">
                <div class="notifications">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="user-avatar">AD</div>
                <span>Admin Tripanca</span>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stat-info">
                    <h3>1,248</h3>
                    <p>Total Penjualan</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon bg-success">
                    <i class="fas fa-box"></i>
                </div>
                <div class="stat-info">
                    <h3>5,420</h3>
                    <p>Produk Terjual</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon bg-warning">
                    <i class="fas fa-warehouse"></i>
                </div>
                <div class="stat-info">
                    <h3>12,850</h3>
                    <p>Stok Tersedia</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon bg-danger">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="stat-info">
                    <h3>8</h3>
                    <p>Produk Low Stock</p>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="charts-grid">
            <div class="chart-card">
                <div class="chart-header">
                    <h3>Penjualan Bulanan</h3>
                    <select>
                        <option>30 Hari Terakhir</option>
                        <option>3 Bulan Terakhir</option>
                        <option>1 Tahun Terakhir</option>
                    </select>
                </div>
                <canvas id="salesChart"></canvas>
            </div>
            <div class="chart-card">
                <div class="chart-header">
                    <h3>Kategori Produk</h3>
                </div>
                <canvas id="productChart"></canvas>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="recent-orders">
            <div class="chart-header">
                <h3>Pesanan Terbaru</h3>
                <a href="#">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Customer</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#TRP001</td>
                            <td>Toko Sejahtera</td>
                            <td>Tripanca 600ml</td>
                            <td>50 karton</td>
                            <td><span class="status completed">Completed</span></td>
                            <td>15 Mar 2024</td>
                        </tr>
                        <tr>
                            <td>#TRP002</td>
                            <td>Supermarket Jaya</td>
                            <td>Tripanca Galon</td>
                            <td>100 pcs</td>
                            <td><span class="status processing">Processing</span></td>
                            <td>14 Mar 2024</td>
                        </tr>
                        <tr>
                            <td>#TRP003</td>
                            <td>CV Mandiri</td>
                            <td>Tripanca Oxygen</td>
                            <td>25 karton</td>
                            <td><span class="status pending">Pending</span></td>
                            <td>14 Mar 2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Sales Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['1 Mar', '5 Mar', '10 Mar', '15 Mar', '20 Mar', '25 Mar', '30 Mar'],
                datasets: [{
                    label: 'Penjualan (Ribu)',
                    data: [120, 150, 180, 200, 170, 220, 240],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37, 99, 235, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Product Chart
        const productCtx = document.getElementById('productChart').getContext('2d');
        const productChart = new Chart(productCtx, {
            type: 'doughnut',
            data: {
                labels: ['600ml', '1500ml', 'Galon', 'Oxygen'],
                datasets: [{
                    data: [40, 25, 20, 15],
                    backgroundColor: [
                        '#2563eb',
                        '#10b981',
                        '#f59e0b',
                        '#8b5cf6'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\laravel\tripanca\resources\views/dashboard.blade.php ENDPATH**/ ?>