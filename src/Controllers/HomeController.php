<?php

namespace Controllers;

use \Dao\Products\Products as ProductsDao;
use \Views\Renderer as Renderer;

class HomeController extends PublicController
{
    public function run(): void
    {
        $viewData = [];
        $viewData["productsOnSale"] = ProductsDao::getDailyDeals();
        Renderer::render("home", $viewData);
    }
}