<?php

        class Controllers{


            /**
             * Controllers constructor.
             */
            public function __construct()
            {
                $this->loadModel();
                $this->views = new Views();
            }

            public function loadModel(){
                $model = get_class($this).'Model';
                $routClass = "Models/".$model.'.php';
                if (file_exists($routClass)){
                    require_once $routClass;
                    $this->model = new $model();
                }
            }

        }