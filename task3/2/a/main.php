<?php

if (!isset($_POST["textBody"])) {
  http_response_code(400);
  return;
}

$textBody = $_POST["textBody"];
echo "Words: " . str_word_count($textBody) . "<br>Chars: " . strlen($textBody);

?>