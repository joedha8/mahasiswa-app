<?php
include ('mahasiswa/mahasiswa.class.php');
$mhs = new Mahasiswa();
$flag = $_GET['flag'];
$nim = $_GET['nim'];

if ($flag == 'edit' && !empty($nim)) {

    //Getting nama details by nama id
    $anamaInfo = $mhs -> getMahasiswaByNama($nim);
    $nim = $anamaInfo['nim'];
    $nama = $anamaInfo['nama'];

}
?>

</script>

<div class='row'>

	<div class='span'>
		<h1>nama</h1>
		<h3>Add Mahasiswa</h3>

		<form id='form1' class='form-horizontal' action="mahasiswa/mahasiswa_action.php" method="POST">
			<label>NIM</label>

			<div class="input-control text size2 " data-role="input-control">
				<input class='required' type="text" name='nim' value="<?php echo($nim) ?>"
				<?php echo($flag == 'edit') ? 'readonly="readonly"' : '' ?>>

			</div>

			<label>nama</label>
			<div class="input-control text" data-role="input-control">
				<input class='required' type="text" name='nama'  value="<?php echo($nama) ?>">

			</div>

			

			<input type="hidden" name="flag" value="<?php echo($flag) ?>" />
			<input name="Submit" type="submit" value="Save" />
			&nbsp;&nbsp; <a href="index.php?mod=mahasiswa&pg=mahasiswa_view">
			<input name="Submit" type="button" value="Cancel" />
			</a>
	</div>
	</form>

</div>
