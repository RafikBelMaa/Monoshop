<?php
try {
  $access = new pdo("mysql:host=localhost;dbname=monoshop;charset=utf8", "root", "");

  $acces->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (\Throwable $th) {
  //throw $th;
  $th->getMessage();
}
