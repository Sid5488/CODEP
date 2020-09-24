<?php

    namespace Application {
        class App {
            private $url;

            public function __construct() {
                $this->declareNamespace();
            }

            private function declareNamespace() {
                $this->url = isset($_GET['url']) ? 
                    explode('/', $_GET['url'])[0] : 
                    'home';
    
                $url = ucfirst($this->url);
                $url .= 'Controller';

                $nameController = 'controllers\\' . $url . '.php';
            }

            public function runApp() {
                if(file_exists('src/app/controllers/' . $this->url . '.php')) {
                    $controller = new $this->url();
    
                    $controller->run();
                } else {
                    die('Não exite esse controlador!');
                }
            }
        }
    }

?>
