<?php   
	
	
if(!file_exists( "pair.txt" ))
{
	
	echo("");
	
}
else
{
	echo(file_get_contents("pair.txt"));
	unlink("pair.txt");
	
}

?>