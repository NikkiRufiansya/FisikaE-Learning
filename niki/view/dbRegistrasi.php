            <?php
                include 'connect/koneksi.php';
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $nama = $_POST['nama'];
                
                $result = mysqli_query($db,"INSERT INTO tb_login SET kode_user='' , username = '$user' , password = md5('$pass') , nama ='$nama' , level='user'");
                if ($result == true > 0) {
                    header('location:user.php');
                }else{
                    echo "input gagal <br>";
                    echo "Error :" . $sql . $db->error;
                }
                $konek->close();
            ?>