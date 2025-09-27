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
            flex-direction: column;
        }

        /* Header Top Bar */
        .header-top {
            background: white;
            padding: 15px 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            z-index: 1000;
            height: 70px;
        }

        .header-top .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-top .logo img {
            width: 120px;
            height: auto;
        }

        .header-top .page-title h1 {
            font-size: 1.5rem;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .header-top .page-title p {
            font-size: 0.9rem;
            color: var(--secondary);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-bar {
            position: relative;
        }

        .search-bar input {
            padding: 10px 15px 10px 40px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            width: 300px;
        }

        .search-bar i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--secondary);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .notification-bell {
            position: relative;
            cursor: pointer;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--danger);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
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

        .user-details {
            text-align: right;
        }

        .user-details .name {
            font-weight: 600;
            color: var(--dark);
        }

        .user-details .role {
            font-size: 0.8rem;
            color: var(--secondary);
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, var(--dark) 0%, #0f172a 100%);
            color: white;
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
            z-index: 1001;
        }

        .sidebar .logo {
            /* padding: 20px; */
            text-align: center;
            border-bottom: 1px solid #334155;
        }

        .sidebar .logo img {
            width: 100px;
            height: auto;
        }

        .nav-links {
            padding: 20px 0;
            height: calc(100vh - 80px);
            overflow-y: auto;
        }

        .nav-links::-webkit-scrollbar {
            width: 5px;
        }

        .nav-links::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 10px;
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
            margin-top: 70px;
            padding: 30px;
            min-height: calc(100vh - 120px);
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
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
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
            justify-content: space-between;
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

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 20px 30px;
            margin-left: 250px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            color: white;
        }

        .copyright {
            color: #94a3b8;
            font-size: 0.9rem;
        }

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
            .header-top {
                left: 70px;
            }
            .footer {
                margin-left: 70px;
            }
            .charts-grid {
                grid-template-columns: 1fr;
            }
            .search-bar input {
                width: 200px;
            }
        }

        @media (max-width: 480px) {
            .header-top {
                padding: 15px 20px;
            }
            .search-bar input {
                width: 150px;
            }
            .user-details {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-top">
        <div class="logo">
            <div class="page-title">
                <h1>Dashboard Admin</h1>
                <p>Tripanca Air Mineral</p>
            </div>
        </div>
        
        <div class="header-actions">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari produk, laporan, atau pengguna...">
            </div>
            
            <div class="user-info">
                <div class="notification-bell">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>
                
                <div class="user-profile">
                    <div class="user-avatar">AD</div>
                    <div class="user-details">
                        <div class="name">Admin Tripanca</div>
                        <div class="role">Super Admin</div>
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="/build/assets/img/logo.png" alt="Tripanca Logo">
        </div>
        <ul class="nav-links">
            <li class="active"><a href="#"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-image"></i> <span>Banner</span></a></li>
            <li><a href="#"><i class="fas fa-info-circle"></i> <span>Tentang Kami</span></a></li>
            <li><a href="#"><i class="fas fa-box"></i> <span>Produk</span></a></li>
            <li><a href="#"><i class="fas fa-blog"></i> <span>Blog</span></a></li>
            <li><a href="#"><i class="fas fa-users"></i> <span>Tim</span></a></li>
            <li><a href="#"><i class="fas fa-star"></i> <span>Ulasan</span></a></li>
            <li><a href="#"><i class="fas fa-phone"></i> <span>Kontak</span></a></li>
            <li><a href="#"><i class="fas fa-history"></i> <span>Sejarah</span></a></li>
            <li><a href="#"><i class="fas fa-eye"></i> <span>Visi & Misi</span></a></li>
            <li><a href="#"><i class="fas fa-building"></i> <span>Bidang Usaha</span></a></li>
            <li><a href="#"><i class="fas fa-images"></i> <span>Foto</span></a></li>
            <li><a href="#"><i class="fas fa-video"></i> <span>Video</span></a></li>
            <li><a href="#"><i class="fas fa-user-friends"></i> <span>User</span></a></li>
            <li><a href="#"><i class="fas fa-user"></i> <span>Profile</span></a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
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

    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="copyright">
                &copy; 2024 Tripanca Air Mineral. All rights reserved.
            </div>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Help Center</a>
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

        // Notification bell click
        document.querySelector('.notification-bell').addEventListener('click', function() {
            alert('Anda memiliki 3 notifikasi baru');
        });

        // User profile dropdown
        document.querySelector('.user-profile').addEventListener('click', function() {
            alert('Menu profil user akan ditampilkan di sini');
        });
    </script>
</body>
</html>