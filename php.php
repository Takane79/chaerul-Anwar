<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendaftaran Osis</title>
</head>
<body>
    <table align="center" CSS STYLE=" border: 1px solid">
        <tr>
            <td bgcolor="Blue" colspan="2" align="center" style="color:white;">FORM PENDAFTARAN OSIS</td>
        </tr>
        <tr>
            <td>Nama Lengkap :</td>
            <td>
                <?php echo $_POST['namaLengkap'] ?>
            </td>
        </tr>
        <tr>
            <td>Nama Panggilan</td>
            <td>
                <?php echo $_POST['namaPanggilan'] ?>
            </td>
        </tr>
        <tr>
            <td>Tempat tanggal lahir</td>
            <td>
                <?php echo $_POST['ttl'] ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <?php echo $_POST['jk'] ?>
            </td>
        </tr>
        <tr>
            <td>Nomor telepon</td>
            <td>
                <?php echo $_POST['notel'] ?>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <?php echo $_POST['jurusan'] ?>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>
                <?php echo $_POST['agama'] ?>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <?php
                    if(isset($_POST['membaca']) && $_POST['membaca'] == 1){
                        echo "Membaca";
                    }
                    if(isset($_POST['menulis']) && $_POST['menulis'] == 1){
                        echo "Menulis ";
                    }
                    if(isset($_POST['dll']) && $_POST['dll'] == 1){
                        echo "dll";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Alasan/Motivasi untuk mendaftar</td>
            <td>
                <?php echo $_POST['alasan'] ?>
            </td>
        </tr>
        <tr>
            <td>foto</td>
            <td><img src="wallpaperflare.com_wallpaper.jpg" alt="" widht="94px" height="150px"></td>
        </tr>
    </table>
</body>

</html>