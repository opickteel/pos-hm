<table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
          <?php while ($data): ?>
            <tr>
                <td><?php echo $data['tipe_kriteria']; ?></td>
                <td><?php echo $data['nama_kriteria']; ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
    </table>
