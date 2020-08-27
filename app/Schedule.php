<?php

namespace App;
use DB;
class Schedule
{
	public function __construct(){
		
	}

	public function checkSlot($id_gym)
	{
		 $Schedule=DB::table('tbl_schedule')->where('id_gym',$id_gym)->get();
		 $data = array( 'thu2' => array('ca1' => 0,'ca2' => 0,'ca3' => 0,) ,'thu3' => array('ca1' => 0,'ca2' => 0,'ca3' => 0,),'thu4' => array('ca1' => 0,'ca2' => 0,'ca3' => 0,),'thu5' => array('ca1' => 0,'ca2' => 0,'ca3' => 0,),'thu6' => array('ca1' => 0,'ca2' => 0,'ca3' => 0,),'thu7' => array('ca1' => 0,'ca2' => 0,'ca3' => 0,),'chunhat' => array('ca1' => 0,'ca2' => 0,'ca3' => 0,));
		 foreach ($Schedule as $key => $value) {
		 	if($value->thu2!='null')
		 	{
		 		$data['thu2']["$value->thu2"]++;
		 	}
		 	if ($value->thu3!='null') {
		 		$data['thu3']["$value->thu3"]++;
		 	}
		 	if ($value->thu4!='null') {
		 		$data['thu4']["$value->thu4"]++;
		 	}
		 	if ($value->thu5!='null') {
		 		$data['thu5']["$value->thu5"]++;
		 	}
		 	if ($value->thu6!='null') {
		 		$data['thu6']["$value->thu6"]++;
		 	}
		 	if ($value->thu7!='null') {
		 		$data['thu7']["$value->thu7"]++;
		 	}
		 	if ($value->chunhat!='null') {
		 		$data['chunhat']["$value->chunhat"]++;
		 	}
		 }

		return $data;
	}
	public function date_calculation($dateN,$date)
	{
		$date_begin  = date($dateN);
        $rate = '+'.$date.' month';
        $newdate = strtotime ( $rate , strtotime ( $date_begin ) ) ;
        $newdate = date ( 'Y-m-j' , $newdate ); 
        return $newdate;
	} 
}