<?php
// Include database connection
require_once 'config/database.php';

// Get counts for dashboard
$customerCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM tb_customer"))['count'];
$productCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM tb_produk"))['count'];
$purchaseCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM tb_pembelian"))['count'];

// Include header
include 'includes/header.php';
?>

<div class="row mb-4">
    <div class="col-12">
        <h1 class="display-4">Welcome to SBDL63 Management System</h1>
        <p class="lead">Manage your customers, products, and purchases with ease.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card dashboard-card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Customers</h5>
                <h2 class="display-4"><?php echo $customerCount; ?></h2>
                <a href="pages/customer/index.php" class="btn btn-light mt-3">Manage Customers</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card dashboard-card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <h2 class="display-4"><?php echo $productCount; ?></h2>
                <a href="pages/product/index.php" class="btn btn-light mt-3">Manage Products</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card dashboard-card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title">Purchases</h5>
                <h2 class="display-4"><?php echo $purchaseCount; ?></h2>
                <a href="pages/purchase/index.php" class="btn btn-light mt-3">Manage Purchases</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h5 class="card-title mb-0">Recent Products</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM tb_produk ORDER BY id_produk LIMIT 5");
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['id_produk']}</td>";
                                echo "<td>{$row['nama_produk']}</td>";
                                echo "<td>Rp " . number_format($row['harga_produk'], 0, ',', '.') . "</td>";
                                echo "<td>{$row['stok_produk']}</td>";
                                echo "<td>{$row['jenis_produk']}</td>";
                                echo "</tr>";
                            }
                            if (mysqli_num_rows($result) == 0) {
                                echo "<tr><td colspan='5' class='text-center'>No products available</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-warning">
                <h5 class="card-title mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <a href="pages/product/add.php" class="list-group-item list-group-item-action">Add New Product</a>
                    <a href="pages/customer/add.php" class="list-group-item list-group-item-action">Add New Customer</a>
                    <a href="pages/purchase/add.php" class="list-group-item list-group-item-action">Record New Purchase</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
include 'includes/footer.php';
?>