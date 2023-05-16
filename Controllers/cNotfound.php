<?php
class cNotfound extends Controllers {


    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function cNotfound(){
        $this->views->getView($this,"cNotfound");
    }

}
$notfound = new cNotfound();
$notfound->cNotfound();