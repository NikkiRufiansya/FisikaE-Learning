<!DOCTYPE html>
<html lang="en">
<head>
  <title>BuEmi.com</title>
 
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
            <div class="col-span9">
                <div id="content" class="span7">
                  <div class="row-fluid">
                      <div class="block">
                          <div class="navbar navbar-inner block-header"> 
                              <div class="muted pull-left">List Materi</div>
                          </div>
                          <table class="table table-striped" align="center">
                            <!-- <?php
                            include "connect/koneksi.php";
                            $tampil = "SELECT * FROM materi";
                            $q = mysqli_query($db , $tampil);
                            while ($row = mysqli_fetch_assoc($q)){
                                ?>
                                <tr>
                                    <td><a href="tampilMateri.php?id_materi=<?php echo $row['id_materi'] ?>" >
                                        <?php echo $row['nama_materi'] ?></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?> -->

                            <tr>
                              <td>
                                <a href="Besaran.php">Materi Besaran Dan Satuan</a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="GLB.php">GLB dan GLBB</a>
                              </td>
                            </tr>
                             <tr>
                              <td>
                                <a href="Fluida.php">Fluida</a>
                              </td>
                            </tr>
                            
                        </table>
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