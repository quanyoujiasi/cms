<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination

require '../../config.php';

$targetFolder = '/uploads'; // Relative to the root

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$root = WEB_PATH;
	
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	
	if(!file_exists($root.$targetFolder))
		mkdir($root.$targetFolder);

	$folder = $targetFolder.'/'.date('Ym');
	if(!file_exists($root.$folder))
		mkdir($root.$folder);

	$extArr = explode('.', $_FILES['Filedata']['name']);
	$ext = strtolower(end($extArr));

	$fileName = $folder.'/'.md5(microtime(true).rand(10000 , 99999)).'.'.$ext;

	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$root.$fileName);
		echo $fileName;
	} else {
		echo '0';
	}
}

if(isset($_POST['act']) && $_POST['act'] == 'del')
{
	@unlink(WEB_PATH.$_POST['url']);
}


?>