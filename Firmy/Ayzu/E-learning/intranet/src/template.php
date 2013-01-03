<?php
function insertTemplate($temp, $in = false)
{
  $content = file_get_contents($temp);
  if ($in)
  {
    foreach ($in as $k => $v)
    {
      $content = str_replace("{#$k}", $v, $content);
    }
  }
  return $content;
} 
