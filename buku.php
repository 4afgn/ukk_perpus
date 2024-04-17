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

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="card-title">Daftar Buku</h5>
            <a href="?page=buku_tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Buku</a>
        </div>
        <div class="d-flex justify-content-end mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari...">
            </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-dark text-white">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Kategori</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori");
                    while($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i++; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['penulis']; ?></td>
                        <td><?php echo $data['penerbit']; ?></td>
                        <td><?php echo $data['tahun_terbit']; ?></td>
                        <td><?php echo $data['deskripsi']; ?></td>
                        <td class="text-center">
                            <a href="?page=buku_ubah&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info me-2"><i class="fas fa-edit"></i> Ubah</a>
                            <button onclick="confirmDelete(<?php echo $data['id_buku']; ?>)" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        if (confirm('Apakah anda yakin menghapus data ini?')) {
            window.location.href = '?page=buku_hapus&&id=' + id;
        }
    }
</script>
