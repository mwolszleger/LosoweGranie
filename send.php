<?php   
	
	
if(!file_exists( "name.txt" ))
{
	file_put_contents("name.txt", $_POST['login']);
	echo("");
	
}
else
{
	echo(file_get_contents("name.txt"));
	unlink("name.txt");
	file_put_contents("pair.txt", $_POST['login']);
	
}

?>