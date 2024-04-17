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
            <h5 class="card-title">Daftar Kategori</h5>
            <a href="?page=kategori_tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kategori</a>
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
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                    while($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i++; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td class="text-center">
                            <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info me-2"><i class="fas fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
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
