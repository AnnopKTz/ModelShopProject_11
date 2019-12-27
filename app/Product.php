<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $productCode = '';
    public $productName = '';
    public $productLine = '';
    public $productScale = '';
    public $productVendor = '';
    public $quantityInStock = 0;
    public $buyPrice = 0;
    public $MSRP = 0;
    public $editDate = 2019-11-12;
    public $editStatus = 1;
    public $created_at ;
    public $updated_at;
}
