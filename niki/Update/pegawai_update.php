

<?php

	try {
		$str_Query = "select * from pegawai where Nip = :id";
		$str_final_Query = $my_koneksi->prepare($str_Query);
		$str_final_Query->bindValue(':id', $id);
		$str_final_Query->execute();
				
	} catch (PDOException $e) {		
		die("Error: ".$e->getMessage());
	}
	
	$hasil = $str_final_Query->fetch();

?>
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="Post" action="../Proses/prosespegawai_update.php">
<table width="546" border="0" align="center" bgcolor="#FFFFFF">

  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nip</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Nip" type="hidden" size="10" Value = "<?php echo $hasil['Nip']; ?>"><?php echo $hasil['Nip']; ?>
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="Nama" value = "<?php echo $hasil['Nama']; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jenis Kelamin</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="Jk">
	  	<option selected="selected"><?php echo $hasil['Jk']; ?></option>
		<option>Laki-laki</option>
		<option>Perempuan</option>
      </select>
    </label></td>
  </tr> 
  <tr>
    <td height="27" align="right" valign="middle">Tanggal Lahir</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="tgl_lahir" value="<?php echo $hasil['tgl_lahir']; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $hasil['alamat']; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jabatan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="jabatan">
          <?php

	include  "../koneksi/koneksi.php";
	try {
		$str_Query = "select * from data_jabatan";
		$str_final_Query = $my_koneksi->prepare($str_Query);
		$str_final_Query->execute();
				
	} catch (PDOException $e) {		
		die("Error: ".$e->getMessage());
	}
	
	$hasil = $str_final_Query->fetchAll();
foreach($hasil as $data){
?>
          
	  	<option value="<?php echo $data['0']; ?>" ><?php echo $data['1']; ?></option>
<?php
                        }
    ?>
      </select>
    </label></td>
  </tr> 
  
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="ttambah" value="TAMBAH"></td>
  </tr>

</table>
</form>
</body>