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

	// check for upload errors
	// validate file type
	// validate file size
	// choose a new file name if desired
	// move file to permanent location
	// change file permissions

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
		<form action="upload_photo.php">

			<input type="submit" name="submit" value="Upload" />
		</form>

	</body>
</html>
