<?php

namespace App\classes;

class Product
{
  private $productName;
  private $productPrice;
  private $stockAmount;
  private $categoryName;
  private $brandName;

  private $filePath;
  private $file;
  private $data;

  private $arrayByHash;
  private $arrayByComma;
  private $result;

  private $imageFile;
  private $directory;
  private $imageName;

  public function __construct($data = null, $file = null)
  {
    if($data)
    {
      $this->productName  = $data["name"];
      $this->productPrice = $data["price"];
      $this->stockAmount  = $data["amount"];
      $this->categoryName = $data["category"];
      $this->brandName    = $data["brand"];
      $this->imageFile    = $file;
    }
    $this->filePath = "./db.txt";
  }

  public function index()
  {
    $this->imageName = $this->imageFile["image"]["name"];
    $this->directory = "../assests/img/upload/".$this->imageName;
    move_uploaded_file($this->imageFile["image"]["tmp_name"], $this->directory);

    $this->file = fopen($this->filePath, "a");
    $this->data = "$this->productName, $this->productPrice, $this->stockAmount, $this->categoryName, $this->brandName, $this->directory#";
    fwrite($this->file, $this->data);
    fclose($this->file);

    return "Product info save successfully";
  }

  public function getAllProductsInfo()
  {
    $this->data = file_get_contents($this->filePath);

    $this->arrayByHash = explode("#", $this->data);

    foreach ($this->arrayByHash as $key => $value)
    {
      if($value)
      {
        $this->arrayByComma = explode(",", $value);

        $this->result[$key]["name"]     = $this->arrayByComma[0];
        $this->result[$key]["price"]    = $this->arrayByComma[1];
        $this->result[$key]["amount"]   = $this->arrayByComma[2];
        $this->result[$key]["category"] = $this->arrayByComma[3];
        $this->result[$key]["brand"]    = $this->arrayByComma[4];
        $this->result[$key]["image"]    = $this->arrayByComma[5];
      }
    }
    return $this->result;
  }
}
