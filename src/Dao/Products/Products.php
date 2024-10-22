<?php

namespace Dao\Products;

class  Products
{
  
  public static function getDailyDeals()
  {
    return [
      [
        "productName" => "Producto 1",
        "productDescription" => "Descripción del producto 1",
        "productImgUrl" => "https://via.placeholder.com/150",
      ],
      [
        "productName" => "Producto 2",
        "productDescription" => "Descripción del producto 2",
        "productImgUrl" => "https://via.placeholder.com/150",
      ],
      [
        "productName" => "Producto 3",
        "productDescription" => "Descripción del producto 3",
        "productImgUrl" => "https://via.placeholder.com/150",
      ]
    ];
  }
}