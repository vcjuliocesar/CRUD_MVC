<?php
/***
  Programador:Julio Cesar Valadez castañeda
  App:MVC
  Fecha: 23-01-2018
***/
namespace App;

use App\core\Request;
use App\core\Route;

require_once '../helpers/helpers.php';
require '../vendor/autoload.php';

require_once "../views/header.php";

Route::run(new Request());

require_once "../views/footer.php";
