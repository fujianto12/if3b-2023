<?php 
// Pertemuan 3
// Materi function dan if condition

$npm = 2226250119;
$nama = "fujianto";

// BUild-in Function
    $tahun_masuk = substr($npm, 0, 2);
    echo $tahun_masuk;

    $tahun_lulus = substr($npm, 2, 2);
    echo "<br>".$tahun_lulus;

    $kode_prodi = substr($npm, 4 ,2);
    echo "<br>".$kode_prodi;
    
    $nomor_urut = substr($npm , 6,4);
    echo "<br>".$nomor_urut;
    echo "<hr>";

    echo strtoupper($nama);
    echo "<br>".ucfirst($nama);

    // IF Condition
    // Kode Prodi : 25, maka tampil informatika
    // Kode prodi : 24, maka tampil Siste informasi
    echo "<br><hr>";
    if ($kode_prodi == 25) {
        echo "Informatika";
    } elseif ($kode_prodi == 24){
        echo "Sistem Informasi";
    }

    require('mdp_helper.php');
    echo get_prodi($kode_prodi);
    echo "<hr>";

    $mahasiswa = [
        [
        "npm" => "2226250118",
        "nama" => "riski"
        ],
        [
        "npm" => "2226240118",
        "nama" => "padel"
        ]
        ];
    echo "<table border=1> 
    <thead>

    <th>npm</th>
    <th>nama</th>
    <th>Program Studi</th>

    <thead>
     <tbody>";
            foreach($mahasiswa as $row){
                echo "
                <tr> 
                    <td>".$row['npm']."</td> 
                    <td>".$row['nama']."</td> 
                    <td>".get_prodi(substr($row['npm'], 4,2))."</td>

                </tr>";
            }
            echo "</tbody></table>";

?>