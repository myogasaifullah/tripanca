@extends('layouts.dashboard')

@section('title', 'Tripanca - Air Mineral Berkualitas')

@section('content')

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

        @endsection