<?php

$curlomatic = curl_init();

$postField = "command=" . $_POST["command"] . "&ucid=" . $_POST["ucid"] . "&password=" . $_POST["password"] . "&qids=" . serialize(explode(",", $_POST["qids"])) . "&studentAnswer=" . rawurlencode(serialize(explode("!!!", rawurldecode($_POST["studentAnswer"]))));

$destUrl = "https://web.njit.edu/~dsp49/bridge.php";

curl_setopt($curlomatic, CURLOPT_URL, $destUrl);
curl_setopt($curlomatic, CURLOPT_POST, 4);
curl_setopt($curlomatic, CURLOPT_POSTFIELDS, $postField);

$output = curl_exec($curlomatic);

curl_close($curlomatic);

?>
