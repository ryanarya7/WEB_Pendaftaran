<!DOCTYPE html>
<html lang="en">
<head>
  <title>konfirmasi mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>

    <?php
        include "pmb.php";
    ?>

    <div class="container-fluid mt-3">
        <table class="table table-hover" id="listtabel">
            <thead>
            <tr>
                <th>Nama</th>
                <th>No Hp</th>
                <th>Email</th>
                <th>NIK</th>
                <th>Jurusan</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $QuerySQL = "SELECT * from konfirmasipmb";
                $execSQL = mysqli_query($koneksi,$QuerySQL);
                
                //cek data
                if (mysqli_num_rows($execSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execSQL)){
                        //ambil data
                        $nama = $row["nama"];
                        $nohp = $row["nohp"];
                        $email = $row["email"];
                        $nik = $row["nik"];
                        $jurusan = $row["jurusan"];
                ?>
                    <tr>
                        <td>
                            <?php echo $nama; ?>
                        </td>
                        <td>
                            <?php echo $nohp; ?>
                        </td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                        <td>
                            <?php echo $nik; ?>
                        </td>
                        <td>
                            <?php echo $jurusan; ?>
                        </td>
                    </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
        include "pmb.php";
        $nama = $_GET['nama'];
        $QuerySQL = "SELECT * from angkatan WHERE name=$nama";
        $execSQL = mysqli_query($koneksi,$QuerySQL);
                
        //cek data
        $nohp = "-";
        if (mysqli_num_rows($execSQL) > 0) {
            while ($row = mysqli_fetch_assoc($execSQL)){
                //ambil data
                $nohp = $row["no$nohp"];
            }
        }
        $email = "-";
        if (mysqli_num_rows($execSQL) > 0) {
            while ($row = mysqli_fetch_assoc($execSQL)){
                //ambil data
                $email = $row["no$email"];
            }
        }
        $nik = "-";
        if (mysqli_num_rows($execSQL) > 0) {
            while ($row = mysqli_fetch_assoc($execSQL)){
                //ambil data
                $nik = $row["no$nik"];
            }
        }
        $jurusan = "-";
        if (mysqli_num_rows($execSQL) > 0) {
            while ($row = mysqli_fetch_assoc($execSQL)){
                //ambil data
                $jurusan = $row["no$jurusan"];
            }
        }
        
    ?>

    <div class="container-fluid mt-3">
        <h3>Data mahasiswa</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th><?php echo $nama; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No Hp</td>
                    <td><?php echo $nohp; ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>NIK</td>
                    <td><?php echo $nik; ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Jurusan</td>
                    <td><?php echo $jurusan; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#listtabel').DataTable();
    });
</script>
</body>
</html>