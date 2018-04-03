<?php 

function dio()
{

	$row = 1;
	$mycsvfile = array(); //define the main array.
	if (($handle = fopen("file.csv", "r")) !== FALSE) 
	{
		echo "<table>";
		while (($data = fgetcsv($handle, filesize('file.csv'))) !== FALSE) 
		{
			echo "<tr>";
			$num = count($data);
			for ($c=0; $c < $num; $c++) 
			{
				echo "<td>";
				echo $data[$c]."  ";
				echo "</td>";
			}
			echo "</tr>";
			//$mycsvfile[] = $data; //add the row to the main array.
		}
		echo "</table>";
		fclose($handle);
	}

}	
	
?>