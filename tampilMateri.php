

    <div > 
          
          <?php
            if(empty($_GET['id_materi'])){                                       
                }else{
                    include "connect/koneksi.php";
                    $id_mapel = $_GET['id_materi'];
                    $tampil2 = "SELECT * FROM subMateri WHERE id_materi = '".$_GET['id_materi']."'";
                    $q2 = mysqli_query($db , $tampil2);
                    if ($row2 = mysqli_fetch_assoc($q2)){              
                    ?>
                       <embed src="<?php echo $row2['pdf'];?>" width="900px" height="550px"  > </embed>
                    <?php
                }
              }
         ?>   
    </div>

