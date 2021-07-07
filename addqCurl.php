<?php

$curlomatic = curl_init();

$tcArr = explode("|", rawurldecode($_POST["testcases"]));
for ($x = 0; $x < count($tcArr); $x++) {
  $tcArr[$x] = explode(",", $tcArr[$x]);
}

$postField = "command=" . $_POST["command"] . "&ucid=" . $_POST["ucid"] . "&password=" . $_POST["password"]  . "&func=" . $_POST["func"] . "&params=" . serialize(explode(",", $_POST["params"])) . "&description=" . rawurlencode(rawurldecode($_POST["description"])) . "&difficulty=" . $_POST["difficulty"] . "&constraints=" . serialize(explode(",", $_POST["constraints"])) . "&topic=" . $_POST["topic"] . "&testcases=" . rawurlencode(serialize($tcArr));

$destUrl = "https://web.njit.edu/~dsp49/bridge.php";

curl_setopt($curlomatic, CURLOPT_URL, $destUrl);
curl_setopt($curlomatic, CURLOPT_POST, 10);
curl_setopt($curlomatic, CURLOPT_POSTFIELDS, $postField);

$output = curl_exec($curlomatic);

curl_close($curlomatic);

?>
