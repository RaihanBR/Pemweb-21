<!DOCTYPE html>
<html>
    <head>
        <title>Buku Tamu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css "href="stylebuku_tamu.css">
    </head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>RBR.Store</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="pemesanan.html">Pemesanan</a></li>
                    <li><a href="#buku_tamu.php">Buku Tamu</a></li>
                    <li><a href="" class="tbl-hijau">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div align="center" id="contrainer">
        <h1>BUKU TAMU</h1>
        <P>Silahkan isi buku tamu untuk meninggalkan pesan dan kesan Anda!</P>

        <br><br>
        <div class="buku">
            <table border="0">
                <form action="<?php echo $_SERVER ['PHP_SELF']?>" method="POST" on submit="validasi()">
                <tr><div>
                    <td><label for="">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama" placeholder="Nama Anda ..."></td>
                </div></tr>
                <tr><div>
                    <td><label for="">NO HP</label></td>
                    <td><input type="number" name="nohp" id="nohp" placeholder=" xxxxxx"></td>
                </div></tr>
                <tr><div>
                    <td><label for="">Email</label></td>
                    <td><input type="text" name="email" id="email" placeholder="xxxx@gmail.com"></td>
                </div></tr>
                <tr><div>
                    <td><label for="">Alamat</label></td>
                    <td><input type="text" name="alamat" id="alamat" placeholder="Alamat Anda ..."></td>
                </div></tr>
                <tr><div>
                    <td><label for="">Pesan</label></td>
                    <td><input type="text" name="pesan" id="pesan" placeholder="Hallo, saya sangat suka dengan web ini"></td>
                </div></tr>
                <tr><div>
                    <td colspan="2"><center><input type="Submit" value="Kirim"></td>
                </div></tr>
            </form>
        </table>
    </div> 
    <script>
        function validasi(){
            var nama = document.getElementById("nama").value;
            var nohp = document.getElementById("nohp").value;
            var email = document.getElementById("email").value;
            var alamat = document.getElementById("alamat").value;
            var pesan = document.getElementById("pesan").value;

            if (nama !="" && nohp !="" && email !="" && alamat !="" && pesan !=""){
                return true 
            } else {
                alert ("Anda harus mengisi data dengan lengkap")
            }
        }

    </script>
    <br><div class="php">
    <?php
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
            $nohp = $_POST['nohp'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $pesan = $_POST['pesan'];

            echo"
            <table>
                <tr>
                    <th>Nama</th>
                    <th>No. Hp</th>  
                    <th>Email</th>  
                    <th>Alamat</th>  
                    <th>Pesan</th>                  
                </tr>
                <tr>
                    <td>$nama</td> 
                    <td>$nohp</td>
                    <td>$email</td>
                    <td>$alamat</td>
                    <td>$pesan</td>               
                </tr>
            </table>";
        }
    ?>
</body>
<footer>
    <p align="center"><b>Copyright @2022 RBR.store</b></p>
</footer>
</html>