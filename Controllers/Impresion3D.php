<?php
class Impresion3D extends Controllers {


    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function Impresion3D(){
        $data['title']='Bienvenido!';
        $data['body-page'] = 'Hola mundo!';
        $this->views->getView($this,"Impresion3D",$data);
    }

}