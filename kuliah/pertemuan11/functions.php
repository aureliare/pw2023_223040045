<?php
define('BASE_URL', '/pw2023_223040045/kuliah/pertemuan12/');

function koneksi(){
  
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
