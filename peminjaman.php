<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('#dataTable tbody tr');

        searchInput.addEventListener('input', function(event) {
            const searchTerm = event.target.value.toLowerCase();

            tableRows.forEach(row => {
                const rowData = row.innerText.toLowerCase();
                if (rowData.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>

<h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
    <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="card-title">Daftar Peminjaman</h5>
        <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peminjam</a>
        </div>
        <div class="d-flex justify-content-end mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari...">
            </div>
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-dark text-white">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user']);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr> 
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjaman']; ?></td>
                    <td>
                        <?php 
                            if($data['status_peminjaman'] != 'dikembalikan'){
                        ?>
                        <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                        <?php
                            }
                            ?>
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</div>
    </div>
</div>