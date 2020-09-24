<?php
    use Application\App;
    use Controllers\HomeController;

    spl_autoload_register(function($autoload) {
        $nameClass = $autoload . '.php';

        if(isset($nameClass)) include $nameClass;
        else throw new Exception("Unable to load $nameClass");
    });
    
    $app = new App();
    $app->runApp();
?>