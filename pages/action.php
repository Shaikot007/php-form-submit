<?php

require_once "../vendor/autoload.php";

use App\classes\Product;

if(isset($_POST["button"]))
{
  $product = new Product($_POST, $_FILES);
  $message = $product->index();
  include "home.php";
}
else if(isset($_GET["status"]))
{
  if($_GET["status"] === "manage")
  {
    $product = new Product();
    $products = $product->getAllProductsInfo();
    include "manage.php";
  }
}
else
  {
    header("Location: ./home.php");
  }
