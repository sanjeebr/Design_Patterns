<?php

/**
 * Class for NEXA order
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class cakeOder {

    /* Member variables */
    public $order = array();
    public $cake = NULL;


    /**
     * To place order
     *
     * @access public
     * @param  void
     * @return array
     */
    public function placeOrder($design_no) {

       array_push($this->order, $this->makeCake($design_no));
       return $this->order;
    }

    public function makeCake($design_no){
      $obj = new bakery($design_no);
      return $obj;

    }
}

class bakery {
    private $cake_design_no = '';

    public function __construct($design_no) {
        $this->cake_design_no=$design_no;

    }
}
?>