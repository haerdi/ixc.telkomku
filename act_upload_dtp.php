<?php
     include "koneksi_db.php";
	 
	if($_POST['upload']){
			$allowed_ext	= array('pdf'); //untuk tipe file
			$file_name		= $_FILES['nama_file']['name'];
			$file_ext		= strtolower(end(explode('.', $file_name)));
			//$file_size		= $_FILES['nama_file']['size'];
			$file_tmp		= $_FILES['nama_file']['tmp_name'];
 
			$tgl_upload			= date("Y-m-d");
			$judul				= $_POST['judul'];
			$email				= $_POST['email'];
			$jenis_file			= $_POST['jenis_file'];
			$jenis_lab			= $_POST['jenis_lab'];
			$deskripsi			= $_POST['deskripsi'];
 
			if(in_array($file_ext, $allowed_ext) === true){
				//if($file_size < 1044070){
					$nama_file = $file_name;
						move_uploaded_file($file_tmp, 'uploads/'.$nama_file);
						
						$query = mysql_query("INSERT INTO upload_dtp VALUES('', '$tgl_upload', '$judul', '$email', '$jenis_file', '$jenis_lab', '$deskripsi', '$nama_file')");
						
						if($query) { ?>
							<script>
								alert('Add Successful');
								location.href='halaman-view.html';
							</script>
						<?php } else { ?>
							<script>
								alert('Add Failed');
								location.href='halaman-upload.html';
							</script>
						<?php } ?>
						
			<?php } else { ?>
				<script>
				alert('Jenis Dokumen harus pdf');
				location.href='halaman-upload.html';
				</script>
			<?php } ?>
						

	<?php } ?>
	

		
