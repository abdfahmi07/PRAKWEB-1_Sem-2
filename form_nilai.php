<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Form Nilai</title>
</head>

<body>
    <section class="form__nilai">
        <div class="card shadow rounded">
            <div class="card-header bg-info">
                <h3>Form Nilai Siswa</h3>
            </div>
            <div class="card-body p-5">
                <form action="array_siswa.php" method="GET">
                    <div class="form-group">
                        <label><strong>NIM</strong></label>
                        <input type="text" class="form-control" placeholder="Masukan NIM" name="nim">
                    </div>
                    <div class="form-group">
                        <label><strong> Nama Lengkap</strong></label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="full_name">
                    </div>
                    <div class="form-group">
                        <label> <strong> Mata Kuliah </strong> </label>
                        <select class="form-control" name="matkul">
                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                            <option value="BD1">Basis Data I</option>
                            <option value="WEB2">Pemrograman Web</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label><strong> Nilai UTS </strong></label>
                        <input type="text" class="form-control col-md-4" placeholder="Masukan Nilai UTS"
                            name="nilai_uts">
                    </div>
                    <div class="form-group">
                        <label><strong> Nilai UAS </strong></label>
                        <input type="text" class="form-control col-md-4" placeholder="Masukan Nilai UAS"
                            name="nilai_uas">
                    </div>
                    <div class="form-group">
                        <label><strong> Nilai Tugas/Praktikum </strong></label>
                        <input type="text" class="form-control col-md-4" placeholder="Masukan Nilai Tugas"
                            name="nilai_tugas">
                    </div>
                    <input type="submit" class="btn btn-success mt-5 col-md-12" value="Simpan" name="proses" />
                </form>
            </div>
            <hr>
            <span>copyright by abdulloh fahmi</span>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>