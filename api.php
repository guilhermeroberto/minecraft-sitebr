<?php
function GetOnlinePlayers($ip, $port = 25565) {
    /*
        GetOnlinePlayers PHP function by Mario Latif.
            Usage:
                GetOnlinePlayers(SERVER_IP, SERVER_PORT[optional])
    */
   
    // Create a CURL connection to the API.
    $ch = curl_init('https://mcapi.us/server/status?ip='.$ip.'&port='.$port);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $results = curl_exec($ch);
    curl_close($ch);
   
    // Unserialize the JSON output
    $json = json_decode($results, true);
   
    // Return the online players
    $onlineplayers = $json['players']['now'];
    return $onlineplayers;
}
?>