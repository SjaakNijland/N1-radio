<?php
/*
* Plugin Name: schema2
* Description: schema voor radio station
* Version: 1.0
* Author: Sjaak Nijland
*/
function schema_func()
{
//Do a GET request
    include 'guzzel/index.php';
	
	$currentDate = date("Y-m-d");
	$dateOffset = isset($_GET["date_offset"]) ?$_GET["date_offset"] : 0;
	$date=date_create($currentDate);
	date_add($date,date_interval_create_from_date_string($dateOffset . " days"));
	// echo date_format($date,"Y-m-d");
	$currentDate = date_format($date,"Y-m-d");
	
	echo "<br><div class='gidsDatum'>";
	echo "<a href='?date_offset=".($dateOffset-1)."'>&larr; &nbsp;</a> ".$currentDate." <a href='?date_offset=".($dateOffset+1)."'>&nbsp;&rarr;</a><br>";
	echo "</div>";
	$url_stukkie='broadcasts/epg/daily/'.$currentDate;
	// echo "URL_STUKKIE: ".$url_stukkie."<br>";
	
    $response = $client->get($url . $url_stukkie ,[
        'headers' => [
            'nonce' => $nonce,
            'timestamp' => $time,
            'api-key' => $api_key,
            'hash' => $auth_string
        ]
    ]);
    $data = json_decode($response->getBody(), true);
	
	// $image = $data[$currentDate][0]['info']['plaatje'];
	// echo $image;
	echo "<div class='gids'>";
		echo "<br>";
		echo "<div class='gidsItem'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][0]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
				// echo "<img src ='".$image."'/>";
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][0]["title"] . "</h3>";
				echo $data[$currentDate][0]["description"];
			echo "</div>";
		echo "</div>";
		echo "<div class='gidsItem2'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][1]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][1]["title"] . "</h3>";
				echo $data[$currentDate][1]["description"];
			echo "</div>";
			// echo $data[$currentDate][1]["start"] . "<br>";
		echo "</div>";
		echo "<div class='gidsItem'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][2]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
				// echo $data[$currentDate][0]["plaatje"];
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][2]["title"] . "</h3>";
				echo $data[$currentDate][2]["description"];
			echo "</div>";
			// echo $data[$currentDate][2]["start"] . "<br>";
		echo "</div>";	
		echo "<div class='gidsItem2'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][3]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
				echo $data[$currentDate][0]["plaatje"];
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][3]["title"] . "</h3>";
				echo $data[$currentDate][3]["description"];
			echo "</div>";
			// echo $data[$currentDate][3]["start"] . "<br>";
		echo "</div>";	
		echo "<div class='gidsItem'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][4]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
				// echo $data[$currentDate][0]["plaatje"];
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][4]["title"] . "</h3>";
				echo $data[$currentDate][4]["description"];
			echo "</div>";
			// echo $data[$currentDate][4]["start"] . "<br>";
		echo "</div>";	
		echo "<div class='gidsItem2'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][5]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
				// echo $data[$currentDate][0]["plaatje"];
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][5]["title"] . "</h3>";
				echo $data[$currentDate][5]["description"];
			echo "</div>";
			// echo $data[$currentDate][5]["start"] . "<br>";
		echo "</div>";	
		echo "<div class='gidsItem'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][6]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
				// echo $data[$currentDate][0]["plaatje"];
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][6]["title"] . "</h3>";
				echo $data[$currentDate][6]["description"];
			echo "</div>";
			// echo $data[$currentDate][6]["start"] . "<br>";
		echo "</div>";	
		echo "<div class='gidsItem2'>";
			echo "<div class='gidsTijd'>";
				echo $data[$currentDate][7]["start"];
			echo "</div>";
			echo "<div class='gidsPlaatje'>";
				// echo $data[$currentDate][0]["plaatje"];
			echo "</div>";
			echo "<div class='gidsInfo'>";
				echo "<h3>" .$data[$currentDate][7]["title"] . "</h3>";
				echo $data[$currentDate][7]["description"];
			echo "</div>";
			// echo $data[$currentDate][7]["start"];
		echo "</div>";
	echo "</div>";
}
add_shortcode('schema2', 'schema_func');