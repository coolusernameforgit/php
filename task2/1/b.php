<?php

function cube($match) {
  $NewNum = pow($match[0], 3);
  return $NewNum;
}

echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3');

?>