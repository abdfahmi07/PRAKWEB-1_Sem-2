<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Data Nilai Siswa</title>
    <style>
    th {
        color: white;
    }
    </style>
</head>

<body>
    <?php
        $ns1 = ['nama' => 'Abdulloh Fahmi', 'nim'=>'01101', 'matkul' => 'BD1', 'uts'=>80,'uas'=>84,'tugas'=>78];
        $ns2 = ['nama' => 'Abdul','nim'=>'01121', 'matkul' => 'WEB2', 'uts'=>70,'uas'=>50,'tugas'=>68];
        $ns3 = ['nama' => 'Fahmi', 'nim'=>'01130','matkul' => 'WEB2','uts'=>60,'uas'=>86,'tugas'=>70];
        $ns4 = ['nama' => 'Abdulloh', 'nim'=>'01134','matkul' => 'WEB2', 'uts'=>90,'uas'=>91,'tugas'=>82];

        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

        $proses= $_GET['proses'];
        $nim = $_GET['nim'];
        $nama_siswa = $_GET['full_name'];
        $mata_kuliah = $_GET['matkul'];
        $nilai_uts = $_GET['nilai_uts'];
        $nilai_uas = $_GET['nilai_uas'];
        $nilai_tugas = $_GET['nilai_tugas'];

        $new_arr = ['nama' => $nama_siswa, 'nim' => $nim, 'matkul' => $mata_kuliah, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];

        array_push($ar_nilai, $new_arr);

        ?>
    <section class="data__siswa">
        <div class="title_data mb-4">
            <h3>Data Nilai Siswa</h3>
        </div>
        <table class="table table-bordered table-hover shadow">
            <thead class="bg-info">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Tugas</th>
                    <th scope="col">Nilai Akhir</th>

                </tr>
            </thead>
            <tbody>
                <?php
               $nomor = 1;
                foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['nama'].'</td>';
                echo '<td>'.$ns['matkul'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomor++;
                }
                ?>
                <tr>
                    <td colspan="8"><a href="form_nilai.php" class="btn btn-success col-12">Tambah Data</a></td>
                </tr>
            </tbody>
        </table>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>