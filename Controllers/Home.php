<?php
        class Home extends Controllers {


            /**
             * Home constructor.
             */
            public function __construct()
            {
                parent::__construct();

            }
            public function Home(){
                $data['title']='Bienvenido!';
                $data['body-page'] = 'Hola mundo!';
                $this->views->getView($this,"Home",$data);
            }

        }