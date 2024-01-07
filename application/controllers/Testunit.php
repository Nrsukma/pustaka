<?php
defined('BASEPATH')or exit('No Direct Access Script allowed');

class Testunit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }

    private function division($a,$b){
        return $a/$b;
    }

    public function index()
    {
        echo "using Unit Test";
        $test = $this->division(6,3);
        $expected_result = 2;
        $test_name = "Division Test Function";
        echo $this->unit->run($test, $expected_result,$test_name);
    }

}
// karena alasan dari ketentuan keamanan 
// dan juga kendala bahasa pemrograman 
// karna keterbatasan bahasa dapat membuat kode sulit untuk mematuhi pedoman secara ketat
// yang terakhir dari ketentuan segi keamanan pada kode pogram