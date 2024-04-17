<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1593642702366-60911e4c43b3'); /* Ganti URL dengan URL gambar latar belakang yang diinginkan */
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .card-body {
            font-size: 24px;
            font-weight: bold;
        }
        .card-footer {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .card-footer a {
            color: #fff;
            text-decoration: none;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }
        .container h1 {
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Dashboard</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- Card 1 -->
        </div>
        <div class="col-xl-3 col-md-6">
            <!-- Card 2 -->
        </div>
        <div class="col-xl-3 col-md-6">
            <!-- Card 3 -->
        </div>
        <div class="col-xl-3 col-md-6">
            <!-- Card 4 -->
        </div>
    </div>
</div>

    <style>
        .card-body {
            font-size: 24px;
            font-weight: bold;
        }
        .card-footer {
            background-color: rgba(0, 0, 0, 0.1);
        }
        .card-footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
<div class="container mt-4">
    <h1 class="mb-4">Navigasi</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-list"></i>
                    <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori")); ?>
                    Total Kategori
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-book"></i>
                    <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku")); ?>
                    Total Buku
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=buku">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-comments"></i>
                    <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan")); ?>
                    Ulasan
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <i class="fas fa-users"></i>
                    <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")); ?>
                    Total User
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
