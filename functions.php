<?php

function getLang($key) {
  global $dictionary;
  $str = $key;
  if (in_array($key, $dictionary))
    $str = $dictionary[$key];
  return $key;
}