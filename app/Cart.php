<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($product, $sl,$id,$active){	
	$gia = $product->price;
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
				if ($giohang['soluong']>=$sl ) {
					if ($active=='update') {
						$temp=$giohang['soluong'] - $sl;
						$giohang['soluong'] = $sl;
						$this->totalPrice -= ($giohang['price']*$temp);
					}else{
						$giohang['soluong'] += $sl;
						$giohang['price'] = $gia * $giohang['soluong'];
						$giachenhlech= $sl * $gia;
						$this->totalPrice += $giachenhlech;
					}				
				}else{
					$temp=$sl-$giohang['soluong']  ;
					$giohang['soluong'] = $sl;
					$giohang['price'] = $gia * $sl;					
					$this->totalPrice += ($gia*$temp);
					}
			}else
				{
					$giohang = ['soluong'=>$sl, 'price' => $gia, 'product' => $product];
					$this->totalQty++;
					$giohang['price'] = $gia * $giohang['soluong'];
					$this->totalPrice += $giohang['price'];
				}
		}else
		{
			$giohang = ['soluong'=>$sl, 'price' => $gia, 'product' => $product];
			$this->totalQty++;
			$giohang['price'] = $gia * $giohang['soluong'];
			$this->totalPrice += $giohang['price'];
		}
		//var_dump($this->items);	
		$this->items[$id] = $giohang;		
		
		
	}
	//xóa 1
	public function reduceByOne($id){
		//$this->items[$id]['soluong']--;
		//$this->items[$id]['price'] -= $this->items[$id]['product']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['price'];
		//if($this->items[$id]['soluong']<=0){
			unset($this->items[$id]);
		//}
	}
	//xóa nhiều
	public function removeproduct($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
