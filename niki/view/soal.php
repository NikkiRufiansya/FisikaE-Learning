<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buemi.com</title>
  <!-- Bootstrap -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
  <link href="../vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
  <link href="../assets/styles.css" rel="stylesheet" media="screen">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <script src="../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
          </head>
          <body>
          <div class="span9">
          <div class="container-fluid text-center">   
              <div class="col-sm-8 text-left"> 
                <form action="nilai.php" method="post" >
                <table class="table table-bordered">
                    <?php
                    include "connect/koneksi.php";
                    $x = 1;
                    $tampil2 = "SELECT * FROM soal ORDER BY RAND() limit 5";
                    $q2 = mysqli_query($db , $tampil2);
                    while ($row2 = mysqli_fetch_assoc($q2)){  

                      ?>
                      <tr>
                        <td><?php echo"<h4>".$row2['soal']."</h4>";?></td>
                      </tr>
                      <?php $query2 = "SELECT * FROM jawaban WHERE id_soal = ".$row2['id_soal']."  ORDER BY RAND() ";
                      $q1 = mysqli_query($db, $query2);
                      while($row = mysqli_fetch_assoc($q1)){
                        ?>
                        <tr><td ><div class="col-span6"><input type="Radio" name="jwb'.$x.'" value="<?php echo $row['bobot']?>"><?php echo $row['jawaban'] ;?></div>
                        </td></tr>

                        <?php
                      }
                      $x++;
                    }
                    ?>
                  </table>

                  
                  <input type="submit" value="Submit" >
                  
                </form>
              </div>

            </div>
          </div>
        </div>

</div>
        <script src="../vendors/jquery-1.9.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="../assets/scripts.js"></script>

      </body>
      </html>