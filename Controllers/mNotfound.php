<?php
class mNotfound extends Controllers {


    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function mNotfound(){
        $this->views->getView($this,"mNotfound");
    }

}
$notfound = new mNotfound();
$notfound->mNotfound();