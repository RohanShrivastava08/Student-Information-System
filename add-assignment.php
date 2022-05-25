<?php


if(isset($_POST['submit']))
{
	$size= $Files['file'] ['size']/1024;
	
	if($size<200)
	{
		move_uploaded_file($FILES_['file'] ['tmp_name'], $FILES_['file'] ['name']);
	}
	else
	{
		echo "Only 200 KB"
    }
}
?>

<form method ="post" enctype="multipart/form-data">
                             
                 <input type="file" name="file">
                 <input type="submit" name="submit" value="Upload">
		  
</form>
		
		
