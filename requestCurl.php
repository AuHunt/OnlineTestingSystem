<?php

$curlomatic = curl_init();

$postField = "command=" . $_POST["command"] . "&ucid=" . $_POST["ucid"] . "&password=" . $_POST["password"]  . "&filter_difficulty=" . $_POST["filter_difficulty"] . "&filter_keywords=" . serialize(explode(",", $_POST["filter_keywords"]));
$destUrl = "https://web.njit.edu/~dsp49/bridge.php";

curl_setopt($curlomatic, CURLOPT_URL, $destUrl);
curl_setopt($curlomatic, CURLOPT_POST, 5);
curl_setopt($curlomatic, CURLOPT_POSTFIELDS, $postField);

$output = curl_exec($curlomatic);

curl_close($curlomatic);

?>
