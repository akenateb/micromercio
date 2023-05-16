<?php

    class Views{


        public function getView($controller, $view,$data=""){

            $controller = get_class($controller);
            $view = $controller=='Home' ? 'Views/'.$view.'.php' : 'Views/'.$controller.'/'.$view.'.php';
            require_once $view;
        }


    }
