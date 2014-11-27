<?php
$file = fopen("exporttemp.ldif","r");
$my_file = 'temp.xml';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data= '<?xml version="1.0" encoding="UTF-8"?>';
fwrite($handle, $data);
$data="\n".'<root>';
$flag=0;
fwrite($handle, $data);
while(! feof($file))
{
		$string= fgets($file);
		$has='#';
		if(strpos($string,'version')!==false);
		else
		{	if(strpos($string,$has)!==false);
			else
			{
				if(strpos($string,' ')!==false)
				{
		  			list($pieces1,$pieces2) = explode(": ", $string);
		  			// $newpieces2=explode("", $pieces2);
		  			$pieces2 = str_replace("\n","", $pieces2);
		  			//print_r(explode(": ", $string));
		  			echo $pieces2."\n";
		  			if($flag>0)
		  			{
		  				if($pieces1=='dn')
		  				{
		  					$data="\n".'</newentry>';
		  					fwrite($handle, $data);
		  					$data="\n".'<newentry>';
		  					fwrite($handle, $data);
		  				}
		  			}
		  			if($flag==0)
		  			{
		  				if($pieces1=='dn')
		  				{
		  					$data="\n".'<newentry>';
		  					fwrite($handle, $data);
		  					$flag=1;
		  				}
		  			}
		  			$data="\n".'<'.$pieces1.'> '.$pieces2.' </'.$pieces1.'>';
					fwrite($handle, $data);
		  		}
	  		}
	  	}

}

fclose($file);
$data="\n".'</newentry>';
fwrite($handle, $data);
$data="\n".'</root>';
fwrite($handle, $data);
fclose($my_file);
/*
$my_file = 'temp.xml';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$i=0;
$data[$i]= "\n".'New data line 21212';
fwrite($handle, $data[$i]);
$data[$i] = 'dn: cn='.$objectname.', cn=schema, cn=config';
fwrite($handle, $data[$i]);
*/

?>