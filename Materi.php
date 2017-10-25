<!DOCTYPE html>
<html lang="en">
<head>
  <title>BuEmi.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<div>
  <h2>List Materi</h2>
</div>
  


    <div > 
           <?php
                include "connect/koneksi.php";
                $tampil = "SELECT * FROM materi";
                $q = mysqli_query($db , $tampil);
                while ($row = mysqli_fetch_assoc($q)){
            ?>
            <a href="tampilMateri.php?id_materi=<?php echo $row['id_materi'] ?>" class="">
               <i class=""></i>
            <?php echo $row['nama_materi'] ?>
            </a><br>
                                       
            <?php
            }
            ?>
    </div>
   
    </div>
  </div>
</div>



</body>
</html>