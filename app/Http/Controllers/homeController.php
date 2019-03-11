<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Cart;
use App\User;
use App\City;
use App\Brand;
use App\Category;
use App\categoryBrand;
use App\Offer;
use App\Product;
use App\Image;
use App\Review;
use Session;
session_start();

class homeController extends Controller
{
    public function home()
    {
        $cityData=City::all();
        $categoryData=Category::all();
        $brandData=Brand::all();
        $offerData=Offer::all();
        $productSale=Product::whereRaw('newPrice != productPrice')->get();
        $newsProduct=Product::orderBy('productId' ,'desc')->take(5)->get();
        $newProduct=Product::orderBy('productId' ,'desc')->skip(5)->take(5)->get();
        $menPrice=Product::where('category_id' , 2)->min('productPrice');
        $womanPrice=Product::where('category_id' , 3)->min('productPrice');
        $menImage=Image::where('product_id' , 15)->first();
        $womanImage=Image::where('product_id' , 13)->first();
        $menName=Product::where('productId' , 15)->first();
        $womanName=Product::where('productId' , 13)->first();
        $menId=Category::where('categoryId' , $menName->category_id)->first()->categoryId;;
        $womanId=Category::where('categoryId' , $womanName->category_id)->first()->categoryId;
        $cartContents=Cart::content();
        $cartCount=Cart::content()->count();
    return view('home.index' , compact(['cityData' , 'categoryData' , 'brandData' , 'offerData' , 'menPrice' , 'womanPrice' , 'menImage' , 'womanImage' ,
        'menId' , 'womanId' ,'productSale' , 'newProduct' ,'newsProduct' , 'sliders' , 'cartCount']));
       
    }
    
    public function showHome(Request $request)
    {
    	$user_email=$request->email;
    	$user_pass=$request->password;
    	$result=User::where('userEmail',$user_email)
    	        ->where('userPassword',$user_pass)->first();
    	        if($result)
    	        {
                  Session::put('userName',$result->userName);
                  Session::put('userId',$result->userId);
                 $request->session()->flash('message.level', 'success');
                 $request->session()->flash('message.title', 'check-circle');
                 $request->session()->flash('message.content', 'you are logged in successfully');
                  return Redirect::to('home');
                }
    	        else
    	        {
                  $request->session()->flash('message.level', 'danger');
                  $request->session()->flash('message.title', 'times-circle-o');
                  $request->session()->flash('message.content', 'Email or Password invalid!');
                  return Redirect::to('home');
    	        }
    }
    public function showLogin()
    {
        $categoryData=Category::all();
        $brandData=Brand::all();
        $offerData=Offer::all();
        $cartContents=Cart::content();
        $cartCount=Cart::content()->count();
         return view('home.showLogin' , compact(['categoryData' , 'brandData' , 'offerData' , 'cartCount']));
    }
    public function showRegister()
    {
        $categoryData=Category::all();
        $brandData=Brand::all();
        $offerData=Offer::all();
        $cityData=City::all();
        $cartContents=Cart::content();
        $cartCount=Cart::content()->count();
        return view('home.showRegister' , compact(['categoryData' , 'brandData' ,
         'offerData' , 'cityData' , 'cartCount']));
     }
    public function logout()
    {
    	Session::flush();
         return Redirect::to('home');
    }
    public function saveRegister(Request $request)
    {
        $userData=new User();
        $cityName=$request->cityName;
        $user_email=$request->emailRegist;
        $email=User::where('userEmail',$user_email)->first();
        $userData->city_id=City::where('cityName',$cityName)->first()->cityId;
    	$userData->userName=$request->userName;
    	$userData->userEmail=$request->emailRegist;
    	$userData->userPassword=$request->passwordRegist;
    	$userData->userPhone=$request->telephone;
    	$admin_pass=$request->passwordRegist;
    	$admin_rpass=$request->confirm;
    	if($email)
    	{
    	   $request->session()->flash('message.level', 'danger');
                  $request->session()->flash('message.title', 'times-circle-o');
                  $request->session()->flash('message.content', 'Email already exist!');
              return Redirect::to('home'); 
    	}
    	elseif($admin_pass==$admin_rpass) 
    	{
    		$userData->save();
    		$request->session()->flash('message.level', 'success');
                 $request->session()->flash('message.title', 'check-circle');
                 $request->session()->flash('message.content', 'you are registered successfully');
    		return Redirect::to('home');
    	}
    	else
    	   {
    	       $request->session()->flash('message.level', 'danger');
                  $request->session()->flash('message.title', 'times-circle-o');
                  $request->session()->flash('message.content', 'Email or Password invalid!');
              return Redirect::to('home');
    	   }
    	
    }
    public function addCart(Request $request)
    {
        $quantity=$request->quantity;
        $productId=$request->productId;
        $product=Product::where('productId',$productId)->first();
        $image=Image::where('product_id',$productId)->first();
        $data['qty']=$quantity;
        $data['id']=$product->productId;
        $data['name']=$product->productName;
        $data['price']=$product->newPrice;
        $data['options']['image']=$image->imageNameOne;
        Cart::add($data);
        return Redirect::to('showCart');
    }
    public function showCart()
    {
        $categoryData=Category::all();
        $brandData=Brand::all();
        $offerData=Offer::all();
        $cartContents=Cart::content();
        $cartCount=Cart::content()->count();
        return view('home.showCart', compact(['offerData' , 'categoryData' , 'brandData' ,
            'cartContents' , 'cartCount']));
    }
    public function showProfile($userId)
    {
        $user=User::find($userId);
        $cityName=City::where('cityId',$user->city_id)->first()->cityName;
        $categoryData=Category::all();
        $brandData=Brand::all();
        $offerData=Offer::all();
        $cartContents=Cart::content();
        $cartCount=Cart::content()->count();
        return view('home.showProfile', compact(['offerData' , 'categoryData' , 'brandData' ,
            'cartContents' , 'cartCount' , 'user' , 'cityName']));
    }
    public function updateCart(Request $request)
    {
        $quantity=$request->quantity;
        $rowId=$request->rowId;
        Cart::update($rowId , $quantity);
        $request->session()->flash('message.level', 'success');
                 $request->session()->flash('message.title', 'check-circle');
                 $request->session()->flash('message.content', 'Total Price updated successfully');
        return Redirect::to('showCart');
    }
     public function deleteCart($rowId , Request $request)
    {
        Cart::update($rowId , 0);
        $request->session()->flash('message.level', 'success');
                 $request->session()->flash('message.title', 'check-circle');
                 $request->session()->flash('message.content', 'Product deleted from cart successfully');
        return Redirect::to('showCart');
    }
    public function destroyCart(Request $request)
    {
        Cart::destroy();
        $request->session()->flash('message.level', 'success');
                 $request->session()->flash('message.title', 'check-circle');
                 $request->session()->flash('message.content', 'Cart destroied successfully');
        return Redirect::to('showCart');
    }
    public function checkLogin()
    {
        $categoryData=Category::all();
        $brandData=Brand::all();
        $offerData=Offer::all();
        $cartContents=Cart::content();
        $cartCount=Cart::content()->count();
         return view('home.checkLogin' , compact(['categoryData' , 'brandData' , 'offerData' , 'cartCount']));
    }
     public function showUser(Request $request)
    {
        $user_email=$request->email;
        $user_pass=$request->password;
        $result=User::where('userEmail',$user_email)
                ->where('userPassword',$user_pass)->first();
                if($result)
                {
                  Session::put('userName',$result->userName);
                  Session::put('userId',$result->userId);
                  $request->session()->flash('message.level', 'success');
                 $request->session()->flash('message.title', 'check-circle');
                 $request->session()->flash('message.content', 'you are logged in successfully');
                  
                  return Redirect::to('showCart');
                }
                else
                {
                     $request->session()->flash('message.level', 'danger');
                  $request->session()->flash('message.title', 'times-circle-o');
                  $request->session()->flash('message.content', 'Email or Password invalid!');
                  return Redirect::to('showCart');
                }
    }
    public function makeOrder(Request $request)
    {
        $orderData=new Order();
        $orderData->user_id=$request->userId;
        $orderData->orderTotal=Cart::total();
        $orderData->orderLocation=$request->location;
        $orderData->save();
        $last=Order::where('user_id',$request->userId)->orderBy('orderId','desc')->first()->orderId;
        
        $cartData=Cart::content();
        foreach($cartData as $data)
          {  
            $detailData=new OrderDetail();
            $detailData->order_id=$last;
             $detailData->product_id=$data->id;
             $detailData->quantity=$data->qty;
             $detailData->quantityPrice=$data->total;
             $detailData->save();
          }
          $request->session()->flash('message.level', 'success');
                 $request->session()->flash('message.title', 'check-circle');
                 $request->session()->flash('message.content', 'New Order created successfully'); 
        return Redirect::to('showCart');
    }
}
