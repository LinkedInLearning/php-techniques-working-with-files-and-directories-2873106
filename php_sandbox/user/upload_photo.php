<?php
// This PHP page both displays the form and processes form submissions

function upload_error($error) {
	// https://www.php.net/manual/en/features.file-upload.errors.php
	$upload_errors = array(
		UPLOAD_ERR_OK 				=> "No errors.",
		UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
	  UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
	  UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
	  UPLOAD_ERR_NO_FILE 		=> "No file.",
	  UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
	  UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
	  UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
	);
	return $upload_errors[$error];
}

$image_types = ['image/png', 'image/gif', 'image/jpeg'];

$image_dir = __DIR__ . '/images';

if(isset($_POST['submit'])) {
	// process the form data

	$filename = basename($_FILES['file_upload']['name']);
	$tmp_path = $_FILES['file_upload']['tmp_name'];
	$type = $_FILES['file_upload']['type'];
	$size = $_FILES['file_upload']['size'];
	$error = $_FILES['file_upload']['error'];

	// check for upload errors
	if($error > 0) {
		$message = upload_error($error);

	// validate file type
	} elseif(!in_array($type, $image_types)) {
		$message = 'File must be an image file.';

	// validate file size
	} elseif($size > 1000000) {
		$message = 'File must be less than 1MB.';

	} else {
		// choose a new file name if desired
		$target_path = "{$image_dir}/{$filename}";

		// move file to permanent location
		if(move_uploaded_file($tmp_path, $target_path)) {
			// change file permissions
			chmod($target_path, 0766);
			$message = "Profile photo uploaded.";
		} else {
			$message = "Profile photo upload failed.";
		}
	}

}

?>

<html>
	<head>
		<title>Upload Profile Photo</title>
	</head>
	<body>

		<p><a href="profile.php">&laquo; Back to Profile</a></p>

		<h1>Upload a Profile Photo</h1>

		<?php if(!empty($message)) { echo "<p>{$message}</p>"; } ?>

		<!-- Make this form work for uploading a file -->
		<form action="upload_photo.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000" /><br />
			<input type="file" name="file_upload" /><br />
			<input type="submit" name="submit" value="Upload" />
		</form>

	</body>
</html>
