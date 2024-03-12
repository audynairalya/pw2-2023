<?php
    include_once 'header.php'
?>
<div class="container">
  <h2>College Students Data</h2>
  <table class="table">
      <thead>
          <tr>
              <th>Number</th>
              <th>Full Name</th>
              <th>Course</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Task</th>
              <th>Average</th>
              <th>Grade</th>
              <th>Predicate</th>
              <th>Information</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Audy Naira Alya</td>
              <td>Statistic and Probability</td>
              <td>90</td>
              <td>98</td>
              <td>95</td>
              <td>87.50</td>
              <td>A</td>
              <td>Very Satisfying</td>
              <td>Pass</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Dodod</td>
              <td>Statistic and Probability</td>
              <td>70</td>
              <td>85</td>
              <td>90</td>
              <td>60</td>
              <td>B</td>
              <td>Satisfying</td>
              <td>Pass</td>
          </tr>
            <?php
                    include_once 'libfungsi.php';
                    if (isset($_POST['submit'])) {
                        $nama_lengkap = $_POST['nama_lengkap'];
                        $matkul = $_POST['matkul'];
                        $nilai_uts = $_POST['nilai_uts'];
                        $nilai_uas = $_POST['nilai_uas'];
                        $praktik = $_POST['nilai_tugas'];

                        $uts = $_POST['nilai_uts'];
                        $uas = $_POST['nilai_uas'];
                        $praktik = $_POST['nilai_tugas'];
                        $rata_rata = rata_rata($uts, $uas, $praktik);

                        $nilai = grade($rata_rata);
                        $hasil =  kelulusan($nilai);

                        echo "<tr>";
                        echo "<td>3</td>"; 
                        echo "<td>$nama_lengkap</td>";
                        echo "<td>$matkul</td>";
                        echo "<td>$nilai_uts</td>";
                        echo "<td>$nilai_uas</td>";
                        echo "<td>$praktik</td>";
                        echo "<td>$rata_rata</td>";
                        echo "<td>$nilai[0]</td>";
                        echo "<td>$nilai[1]</td>";
                        echo "<td>$hasil</td>";
                        echo "</tr>";
                    }
            ?>