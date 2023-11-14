<?php
    include_once('config.php');
    if(isset($_POST['simpan'])){
        extract($_POST);
        $ins = mysqli_query($conn, "insert into tbkelas values(null, '$nama_kelas','$jurusan')");
        if($ins){
            ?>
                <script>
                    alert('simpan berhasil');
                    location.href = '?hal=tampilkelas';
                </script>
            <?php
        }
    }
?>
<a href="?hal=tampilkelas">Kembali ke Tampil Kelas</a>
<br>
<br>
<form action="?hal=tambahkelas" method="post">
    <table>
        <tr>
            <td>Nama Kelas</td>
            <td>
                <input type="text" name="nama_kelas" placeholder="Nama Kelas" required>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <select name="jurusan" required>
                    <option value="">==pilih jurusan==</option>
                    <option value="rekayasa perangkat lunak">Rekayasa Perangkat Lunak</option>
                    <option value="desain komunikasi visual">Desain Komunikasi Visual</option>
                    <option value="perkantoran">Manajemen Perkantoran</option>
                    <option value="akutansi">Akuntansi</option>
                    <option value="bisnis daring">Bisnis Digital</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="simpan" value="simpan">Simpan</button>
            </td>
            <td>
                <button type="reset">Reset</button>
            </td>
        </tr>
    </table>

</form>