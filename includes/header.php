<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBDL63 Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sbdl63_website/assets/css/style.css">
    <style>
    .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        padding: 20px 0;
        transition: all 0.3s ease;
    }

    .navbar.shrink {
        padding: 8px 0;
        background-color: #003d80 !important; /* warna saat shrink */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-size: 24px;
        transition: font-size 0.3s ease;
    }

    .navbar.shrink .navbar-brand {
        font-size: 20px;
    }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="/index.php">SBDL63</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/product/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/customer/index.php">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/product/index.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/purchase/index.php">Purchases</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="/sbdl63_website/index.php">SBDL63</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../product/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../customer/index.php">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/product/index.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../purchase/index.php">Purchases</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <div class="container">