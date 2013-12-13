<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once SPARKPATH . 'phpexcel/1.8.0/vendor/PHPExcel.php';

class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}