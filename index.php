<?php

require_once __DIR__ . '/vendor/autoload.php';

use MVCFinalTamLe\controllers\UrlControllers;

\MVCFinalTamLe\libs\init::start();
(new UrlControllers)->index();
