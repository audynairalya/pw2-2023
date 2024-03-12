<?php
    include_once 'header.php'
?>
<div class="container my-5">
    <h1 class="text-center mb-4">Score Form</h1>
    <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="data_nilai.php">
        <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-4 col-form-label">Full Name</label>
                <div class="col-8">
                    <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="matkul" class="col-4 col-form-label">Course</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" required="required" class="form-select">
                        <option value="">----- Pick Course -----</option>
                        <option value="Dasar Dasar Pemrograman">Fundamentals of Programming</option>
                        <option value="Pemrograman Web">Website Programming</option>
                        <option value="Statistika dan Probabilistas">Statistic and Probability</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uts" class="col-4 col-form-label">UTS Score</label>
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uas" class="col-4 col-form-label">UAS Score</label>
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_tugas" class="col-4 col-form-label">Practicum Score</label>
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="offset-4 col-8">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
    include_once 'footer.php'
?>