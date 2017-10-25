            <?php
                include 'connect/koneksi.php';
                $rand = rand(0,9999);
                $soal2 = $_POST["soal2"];
                $jawaban1 = $_POST["jawaban1"];
                $jawaban2 = $_POST["jawaban2"];
                $jawaban3 = $_POST["jawaban3"];
                $jawaban4 = $_POST["jawaban4"];
                
                $sql = "INSERT INTO soal SET id_soal='$rand',soal='$soal2'";
                $result = $db->query($sql);
                if ($result == true > 0) {
                    header('location:uploadSoal.php');
                }else{
                    echo "input gagal <br>";
                    echo "Error :" . $sql . $db->error;
                }
                $sql1 = "INSERT INTO jawaban SET id_soal='$rand',jawaban='$jawaban1',bobot='10'";
                $sql2 = "INSERT INTO jawaban SET id_soal='$rand',jawaban='$jawaban2',bobot='0'";
                $sql3 = "INSERT INTO jawaban SET id_soal='$rand',jawaban='$jawaban3',bobot='0'";
                $sql4 = "INSERT INTO jawaban SET id_soal='$rand',jawaban='$jawaban4',bobot='0'";

                $result = $db->query($sql1);
                if ($result == true > 0) {
                    header('location:uploadSoal.php');
                }else{
                    echo "input gagal <br>";
                    echo "Error :" . $sql . $db->error;
                }

                $result = $db->query($sql2);
                if ($result == true > 0) {
                    header('location:uploadSoal.php');
                }else{
                    echo "input gagal <br>";
                    echo "Error :" . $sql . $db->error;
                }

                $result = $db->query($sql3);
                if ($result == true > 0) {
                    header('location:uploadSoal.php');
                }else{
                    echo "input gagal <br>";
                    echo "Error :" . $sql . $db->error;
                }

                $result = $db->query($sql4);
                if ($result == true > 0) {
                    header('location:uploadSoal.php');
                }else{
                    echo "input gagal <br>";
                    echo "Error :" . $sql . $db->error;
                }
                $konek->close();
            ?>