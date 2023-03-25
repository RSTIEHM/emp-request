<?php

function formatDateStr($str)
{
  $strArr = explode("-", $str);
  return $strArr[1] . "-" . $strArr[2] . "-" . $strArr[0];
}



?>