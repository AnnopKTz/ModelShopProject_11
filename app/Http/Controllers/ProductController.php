<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class ProductController extends Controller
{
    public function index(){
        $categories = DB::table('products')->get();
        // dump($categories);
        $cart = Session::get('cart');
        return view('product.category',['cartItems'=>$cart])->with(compact("categories"));
    }

    public function show(){
        $products = DB::table('products')->join('product_status', function($join){
            $join->on('products.editStatus','=','product_status.statusID');
        })->get();
        return view('product.productStock')->with(compact("products"));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'productCode' => 'required|unique:products',
            'productName' => 'required',
            'productLine' => 'required',
            'productScale' => 'required',
            'productVendor' => 'required',
            'quantityInStock' => 'required',
            'buyPrice' => 'required',
            'MSRP' => 'required',
        ]);
        if($request->editStatus==4){
            DB::table('products') ->insert(['productCode'=>$request->productCode,'productName'=>$request->productName,'productLine'=>$request->productLine,
            'productScale'=>$request->productScale,'productVendor'=>$request->productVendor,'productDescription'=>$request->productDescription,'quantityInStock'=>0,'buyPrice'=>$request->buyPrice,
            'MSRP'=>$request->MSRP,'editStatus'=>$request->editStatus]);
        }else{
            DB::table('products') ->insert(['productCode'=>$request->productCode,'productName'=>$request->productName,'productLine'=>$request->productLine,
            'productScale'=>$request->productScale,'productVendor'=>$request->productVendor,'productDescription'=>$request->productDescription,'quantityInStock'=>$request->quantityInStock,'buyPrice'=>$request->buyPrice,
            'MSRP'=>$request->MSRP]);
        }
        return redirect('/products');
    }

    public function edit($productCode){
        $products = DB::table('products')->where('productCode','=',$productCode)->get();
        return view('product.editproduct',compact("products"));
    }

    public function editProduct(Request $request){
        $productCode = $request->input('productCode');
        DB::table('products')->where('productCode','=',$productCode)->update(['productName'=>$request->productName,'productLine'=>$request->productLine,'productScale'=>$request->productScale,'productVendor'=>$request->productVendor,'productDescription'=>$request->productDescription,'quantityInStock'=>$request->quantityInStock,'editStatus'=>2]);
        return redirect()->action('ProductController@edit',$productCode);
    }

    public function deleteProduct($productCode){
        DB::table('products')->where('productCode','=',$productCode)->update(['editStatus'=>3]);
        return redirect()->action('ProductController@show');
    }

    public function addProduct(){
        return view('product.addproduct');
    }

    public function addProductToCart(Request $request ,$productCode){
        $product = DB::table('products')->where('productCode','=',$productCode)->get();
        // $request->session()->forget('cart');
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $cart->addItem($productCode,$product);

        //update cart
        $request->session()->put('cart',$cart);
        return redirect('/');
    }

    public function showCart(){
        $cart = Session::get('cart');// pull data from cart
        // dump($cart);
        if($cart){
            return view('product.checkout',['cartItem'=>$cart]);
        }else{
            return redirect('/');
        }
    }

    public function removeItemInCart(Request $request ,$productCode){
        $cart=$request->session()->get('cart');
        if(array_key_exists($productCode,$cart->items)){
            unset($cart->items[$productCode]);
        }
        $aftercart=$request->session()->get('cart');
        $updatecart= new Cart($aftercart);
        $updatecart->updateQPP();
        $request->session()->put('cart',$updatecart);
        return redirect('/products/showCart');
    }

    public function increaseItem(Request $request ,$productCode){
        $product = DB::table('products')->where('productCode','=',$productCode)->get();
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $cart->addItem($productCode,$product);
        $request->session()->put('cart',$cart);
        return redirect('/products/showCart');
    }

    public function decreaseItem(Request $request ,$productCode){
        $product = DB::table('products')->where('productCode','=',$productCode)->get();
        $prevCart = $request->session()->get('cart');
        $cart = new Cart ($prevCart);
        if($cart->items[$productCode]['quantity']>1){
            $cart->items[$productCode]['quantity']=$cart->items[$productCode]['quantity']-1;
            $cart->items[$productCode]['totalEach']=$cart->items[$productCode]['quantity']*$product[0]->MSRP;
            $cart->updateQPP();
            $request->session()->put('cart',$cart);
        }else{
            session()->flash("warning","You must have at least 1 product");
        }
    
        return redirect('/products/showCart');
    }

    public function showProductline(){
        $details = DB::table('products')->get();
        return view('category.show',compact("details"));
    }

    public function showScale(){
        $details = DB::table('products')->get();
        return view('category.scale',compact("details"));
    }

    public function showVendor(){
        $details = DB::table('products')->get();
        return view('category.vendor',compact("details"));
    }

    public function showPreorder(){
        $details = DB::table('products')->get();
        return view('category.pre_order',compact("details"));
    }
}