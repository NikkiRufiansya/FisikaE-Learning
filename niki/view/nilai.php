<table border="1px">
  <tr>
    <td>
         <ul>
           <?php
                include "connect/koneksi.php";
               if(!empty($_POST['jwb1'])){
                    $x1 = $_POST['jwb1'];
               }else{
                    $x1 = 0;
               }

               if(!empty($_POST['jwb2'])){
                    $x2 = $_POST['jwb2'];
               }else{
                    $x2 = 0;
               }

               if(!empty($_POST['jwb3'])){
                    $x3 = $_POST['jwb3'];
               }else{
                    $x3 = 0;
               }

               if(!empty($_POST['jwb4'])){
                    $x4 = $_POST['jwb4'];
               }else{
                    $x4 = 0;
               }

               if(!empty($_POST['jwb5'])){
                    $x5 = $_POST['jwb5'];
               }else{
                    $x5 = 0;
               }
               echo "Selamat Anda Mendapatkan Nilai : " . ($x1+$x2+$x3+$x4+$x5)*2;
               //echo ($x1+$x2+$x3+$x4+$x5)*2;
         ?>
     </ul>
    </td>
   
  </tr>

</table>
          <button>
            <a href="soal.php">Back</a>
          </button>
 
      
        
