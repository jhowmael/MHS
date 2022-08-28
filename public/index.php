<?php

require_once('../vendor/autoload.php');
require_once('../app/functions/functions.php');

use app\controller\ProductsController;
new \app\core\RouterCore();

$teste = 'teste dd';

$c1 = new ProductsController();

$c1->helo($text = 'JU <3 MAEL');

dd($teste);

?>