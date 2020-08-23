<?php

namespace App;
use DB;
class Tuvan
{
	public function __construct(){
		
	}
	public function checkstatus($a,$gt)
		{
			if($gt=='')
			{
				$value = DB::table('tbl_advice')->where('status','like','%'.$a.'%')->first();
			}else
			$value = DB::table('tbl_advice')->where('status','like','%'.$a.'%')->where('sex','=',$gt)->first();
		   
		    return $value->content;
		        
		}
		//dinh duong
	public function check_health($dd1,$dd2,$dd3)
		{
		    if ($dd1==1&&$dd2==1&&$dd3==1) {   
		        return "lành mạnh";
		    }elseif ($dd3==0||$dd2==0) {
		        return "không ổn";
		    }elseif ($dd1==0&&$dd2==0&&$dd3==0) {
		        return "không lành mạnh";
		    }
		}
		//muc tieu tap luyen
	public	function check_customer($ch1,$ch2)
		{
		    if ($ch1==1&&$ch2==1) {   
		        # custom loai I
		    }elseif ($ch1==1||$ch2==1) {
		        # custom loai II
		    }elseif ($ch1==0&&$ch2==0) {
		        # custom loai III
		    }
		}
		public	function check_body($BMI,$gt)
		{
		    if($gt == '0'){
			    if($BMI <18.5){
			        $Tinhtrang="gầy"; 			        
			    }
			    elseif($BMI >=18.5&& $BMI <=22){
			        $Tinhtrang="bình thường";			       
			    }
			    elseif($BMI >=22.1&& $BMI <=24.9){
			        $Tinhtrang="thừa cân";			        
			    }
			    elseif($BMI >25){
			        $Tinhtrang="quá cân";			        
				    }
			}else {
			  $b=1;
			    if($BMI <18.5){
			        $Tinhtrang="gầy";			        
			    }
			    elseif($BMI >=18.5&& $BMI <=24.9){
			        $Tinhtrang="bình thường";			        
			    }
			    elseif($BMI >=25&& $BMI <=29.9){
			        $Tinhtrang="thừa cân";			        
			    }
			    elseif($BMI >30){
			        $Tinhtrang="quá cân";
			    }

		}
		return $Tinhtrang;
	}
	public function BMI($cn,$cc)
		{
			$BMI = round($cn/($cc*$cc), 1);
			return $BMI;
		}

	public function suggest($KH)
	{
		$product= array();
		foreach ($KH as $key => $value) {
			if($value=='1')
			{
				if($key=='yoga')
				{
					$prod = Combo::where('description','like','%yoga%')->get()->toArray();
				}elseif($key=='hlv') {
					$prod = Combo::where('HLV','=','1')->get()->toArray();
				}elseif ($key=='OLD') {
					$prod = Combo::where('ten','like','%OLD%')->get()->toArray();
				}else
				{
					$prod = Combo::where('ten','like','%'.$key.'%')->get()->toArray();
				}
			$product = array_merge($product,$prod);
			$product=array_unique($product,0);
			}else{
				$product = Combo::where('HLV','=','0')->where('ten','not like','%OLD%')->where('ten','not like','%VIP%')->where('ten','not like','%newbie%')->where('description','not like','%yoga%')->get()->toArray();
			}	
		}
		return $product;
	}
	public function suggest_tpbs($value)
		{
			$product = Product::where('loaiSP','tpbs')->where('description','like','%'.$value.'%')->get()->toArray();
			return $product;
		}
}