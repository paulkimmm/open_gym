<?php 
	$gym = str_replace("_", " ", $_REQUEST["gym"]);
	try
	{		
		$data = json_decode(file_get_contents("../js/data.json"));
		foreach($data as $i => $d)
		{
			//echo $d->name . " - " . $gym ."\n";
			if($d->name == $gym){
				if($_REQUEST["return"] == "true") {
					echo $data[$i]->pack;
					return;
				}
				$data[$i]->pack = $_REQUEST["level"];
				break;
			}
		}
		$data = json_encode($data);
		file_put_contents("../js/data.json", $data);
		echo $_REQUEST["level"];
	}
	catch(Exception $e)
	{
		echo "Fatal Error from server: ". $e->getMessage()."";
		return;
	}
	
?>