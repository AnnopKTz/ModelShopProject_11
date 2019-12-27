<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Cart extends Model
{
    public $items;//Array
    public $totalQuantity;
    public $totalPrice;
    public $totalPoint;
    public function __construct($prevCart){
        if($prevCart != null){
            //oldcart
            $this->items=$prevCart->items;
            $this->totalQuantity=$prevCart->totalQuantity;
            $this->totalPrice=$prevCart->totalPrice;
            $this->totalPoint=$prevCart->totalPoint;
        }else{
            //newCart
            $this->items=[];
            $this->totalQuantity=0;
            $this->totalPrice=0;
            $this->totalPoint=0;
        }
    }
    public function addItem($productCode,$product){
        $price = (int)($product[0]->MSRP);
        if(array_key_exists($productCode,$this->items)){
            $productToAdd=$this->items[$productCode];
            $productToAdd['quantity']++;
            $productToAdd['totalEach']=$productToAdd['quantity']*$price;
        }else{
            $productToAdd=['quantity'=>1,'totalEach'=>$price,'data'=>$product];
        }
        $this->items[$productCode]=$productToAdd;
        $this->totalQuantity++;
        $this->totalPrice=$this->totalPrice+$price;
        $this->totalPoint=(int)($this->totalPrice/100)*3;
    }
    public function updateQPP(){
        $totalPrice=0;
        $totalQuantity=0;
        foreach($this->items as $item){
            $totalQuantity=$totalQuantity+$item['quantity'];
            $totalPrice=$totalPrice+$item['totalEach'];
        }
        $totalPoint = (int)($totalPrice/100)*3;
        $this->totalPoint=$totalPoint;
        $this->totalPrice=$totalPrice;
        $this->totalQuantity=$totalQuantity;
    }
}