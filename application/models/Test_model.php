<?php
/**
 *
 */
class Test_model extends CI_model
{

public function get_students(){
  $students=array(
    array("fn"=>'Ville',"ln"=>'Virta'),
    array("fn"=>'Lisa',"ln"=>'Smith'),
    array("fn"=>'Ann',"ln"=>'Jones')
  );
  return $students;
}
}
