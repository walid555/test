<?php
use App\Admin;
$userId=Session::get('userId');
$message=Session::get('message');
            /* if ($message) {
            echo "<div class='alert alert-success alert-dismissible' id='add'>"; 
            echo "<table style='margin-left:450px'><tr><td style='width:20px'><i class='fa fa-check-circle'></i></td>";
            echo "<td>";
               echo $message;
               Session::put('message',null);
               echo "</td></tr></table>";
            echo "</div>";
             }*/
?>
@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }} alert-dismissible" id="add">
        <i class="fa fa-{{ session('message.title') }}"></i> 
    {!! session('message.content') !!}
    </div>
@endif
<!DOCTYPE html>
<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Product Details</title>
<meta name="description" content="Alula, Responsive, Opencart Theme, Fashion Theme" />
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/jquery-2.1.1.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/jquery-ui.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js')}}" ></script>
<link href="{{asset('tt_alula/catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet" />
<link href="{{asset('tt_alula/catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css')}}" rel="stylesheet" />
<script src="{{asset('tt_alula/catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/ocmegamenu/menu.js')}}" ></script>
<link href="{{asset('tt_alula/catalog/view/theme/tt_alula1/stylesheet/ocmegamenu/menu.css')}}" rel="stylesheet" />
<link href="{{asset('tt_alula/catalog/view/theme/tt_alula1/stylesheet/opentheme/css/animate.css')}}" rel="stylesheet" />
<link href="{{asset('tt_alula/catalog/view/javascript/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
<script src="{{asset('tt_alula/catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}" ></script>
<link href="{{asset('tt_alula/catalog/view/javascript/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/javascript/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/javascript/pe-icon-7-stroke/css/helper.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/javascript/elegant-font/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/javascript/ionicons/css/ionicons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/e-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/javascript/stroke-gap-icons/css/stroke-gap-icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/javascript/linearicons-free/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/javascript/plaza-icon/style.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('tt_alula/catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js')}}" ></script>
<link href="{{asset('tt_alula/catalog//view/theme/tt_alula1/stylesheet/opentheme/ocslideshow/ocslideshow.css')}}" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,500,600,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet" />
<link href="{{asset('tt_alula/catalog/view/theme/tt_alula1/stylesheet/stylesheet.css')}}" rel="stylesheet" />
<script src="{{asset('tt_alula/catalog/view/javascript/cloudzoom/zoom.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/ocquickview/ocquickview.js')}}" ></script>
<link href="{{asset('tt_alula/catalog/view/theme/tt_alula1/stylesheet/ocquickview/ocquickview.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('tt_alula/catalog/view/theme/tt_alula1/stylesheet/opentheme/ocajaxlogin/css/ocajaxlogin.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{asset('tt_alula/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{asset('tt_alula/catalog/view/javascript/jquery/swiper/css/swiper.min.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{asset('tt_alula/catalog/view/javascript/jquery/swiper/css/opencart.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{asset('tt_alula/catalog/view/theme/tt_alula1/stylesheet/opentheme/ocpagebuilder.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{asset('tt_alula/catalog/view/javascript/jquery/magnific/magnific-popup.css')}}" type="text/css" rel="stylesheet" media="screen" />
<script src="{{asset('tt_alula/catalog/view/javascript/opentheme/jquery.bpopup.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/opentheme/jquery.cookie.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/opentheme/ocajaxlogin/ocajaxlogin.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/swiper/js/swiper.jquery.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js')}}" ></script>
<script src="{{asset('tt_alula/catalog/view/javascript/common.js')}}" ></script>
<link href="{{asset('tt_alula/catalog/e/catalog/cart.png')}}" rel="icon" />
</head>
<body class="common-home home1">
<div class="wrapper">
<nav id="top">
<div class="container">
<div class="container-inner">	
<div class="box box-left">
<div class="social-top">
<div class="follow">
<label>Follow Us:</label>
<ul class="link-follow">
<li><a class="facebook ion-social-facebook" title="Facebook" href="https://www.facebook.com/plazathemes1"><span>facebook</span></a></li>
<li><a class="twitter ion-social-twitter" title="Twitter" href="https://twitter.com/plazathemes"><span>twitter</span></a></li>
<li><a class="google ion-social-googleplus-outline" title="Google" href="#"><span>google </span></a></li>
<li><a class="instagram ion-social-instagram-outline" title="Instagram" href="#"><span>Instagram</span></a></li>
<li><a class="youtube ion-social-youtube" title="Youtube" href="https://www.youtube.com/user/plazathemes"><span>youtube </span></a></li>
</ul>
</div> 									
</div>
</div>
           
<div class="box box-right">
<div class="setting">
   @if($userId)
 <div class="btn-group">
<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">{{Session::get('userName')}}<i class="ion-ios-arrow-down"></i></button>
<div class="dropdown-menu" >
<div id="top-links">
<ul class="ul-account list-unstyled">
<li>
<a href="{{URL::to('showProfile/'.$userId)}}">My Profile</a>
</li>
<li>
<a  href="{{URL::to('logout')}}">Logout</a>
</li>
</ul>
</div>
</div>

</div>
@else
<div class="btn-group">
<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">My Account<i class="ion-ios-arrow-down"></i></button>
<div class="dropdown-menu" >
<div id="top-links">
<ul class="ul-account list-unstyled">
<li>
<a id="a-register-link" href="{{URL::to('showRegister')}}">Register</a>
</li>
<li>
<a id="a-login-link" href="{{URL::to('showLogin')}}">Login</a>
</li>
</ul>
</div>
</div>

</div>
@endif
</div>
<div class="language">  <form action="tt_alula/index-php_route_common/language/language.html" method="post" enctype="multipart/form-data" id="form-language">
<div class="btn-group">
<span class="pull-left hidden-xs hidden-sm hidden-md text-ex">Language:</span>
<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
<img src="{{URL::to('tt_alula/catalog/language/en-gb/en-gb.png')}}" alt="English" title="English" />
en-gb
<i class="ion-ios-arrow-down"></i>
</button>
<ul class="dropdown-menu">
<li><button class="btn btn-link btn-block language-select item-selected" type="button" name="en-gb"><img src="{{asset('tt_alula/catalog/language/en-gb/en-gb.png')}}" alt="English" title="English" /> English</button></li>
<li><button class="btn btn-link btn-block language-select" type="button" name="de-de"><img src="{{asset('tt_alula/catalog/language/de-de/de-de.png')}}" alt="Germany" title="Germany" /> Germany</button></li>
</ul>
</div>
<input type="hidden" name="code" value="" />
<input type="hidden" name="redirect" value="http://demo.towerthemes.com/tt_alula/index.php?route=common/home" />
</form>
</div>
</div>
</div>
</div>
</nav>
<header>
<div class="header-inner ">
<div class="container">
<div class="container-inner">
<div class="inner">
<div class="inner-inner">
<div class="logo-container">
<div id="logo">
<a href="{{URL::to('home')}}">
<img src="{{asset('tt_alula/image/catalog/logo/logo.png')}}" title="Alula1" alt="Alula1" class="img-responsive" /></a>
</div>
</div>
<div class="box-cart">
<div id="cart" class="btn-group btn-block">
<button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn dropdown-toggle"><span id="cart-total"><span class="txt_number">{{$cartCount}}</span><span class="txt_items">Shopping Cart </span><span class="total-price">$0.00</span></span></button>
@if($userId)
<ul class="dropdown-menu pull-right">
        <li>
        <a href="{{URL::to('showCart')}}"> 
        <table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-shopping-cart" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Shopping Cart</p></td></tr></table>
      </a>
      </li>
      <li>
      <a href="{{URL::to('showFavourity/'.$userId)}}">    
<table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-heart-empty" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Favourity Cart</p></td></tr></table>
      </a>
      </li>
      <li>
      <a href="{{URL::to('showCompare/'.$userId)}}">    
<table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-tasks" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Compare Cart</p></td></tr></table>
      </a>
      </li>
        <li>
          <a href="{{URL::to('userOrders/'.$userId)}}">    
<table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-duplicate" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Orders Cart</p></td></tr></table>
      </a>
    </li>
      <li>
    </li>
      </ul>
@else
<ul class="dropdown-menu pull-right">
        <li>
        <a href="{{URL::to('showCart')}}"> 
        <table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-shopping-cart" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Shopping Cart</p></td></tr></table>
      </a>
      </li>
      <li>
      <a href="{{URL::to('showLogin')}}">    
<table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-heart-empty" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Favourity Cart</p></td></tr></table>
      </a>
      </li>
      <li>
      <a href="{{URL::to('showLogin')}}">    
<table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-tasks" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Compare Cart</p></td></tr></table>
      </a>
      </li>
        <li>
          <a href="{{URL::to('showLogin')}}">    
<table style="margin-left:60px"><tr><td style="width:30px">
        <i class="glyphicon glyphicon-duplicate" style="font-size: 18px"></i></td>
      <td><p class="text-center cart-empty" style="font-size: 15px">Your Orders Cart</p></td></tr></table>
      </a>
    </li>
      <li>
    </li>
      </ul>
@endif
</div>
</div>
</div>
<div class="header-phone">
<div class="text">
<label>Customer Support</label>
<p>(08) 12 345 789</p>
</div>
</div>						 									 						 									
</div>
<div class="top-search">
<div id="search-by-category">
<div class="search-container">
<div class="categories-container">
<div class="hover-cate">
<p><span class="cate-selected" data-value="0">All Categories</span><i class="fa fa-caret-down"></i></p>
<ul class="cate-items">
<li class="item-cate" data-value="0">All Categories</li>
<li data-value="430" class="item-cate">Bonsai</li>
<li data-value="431" class="item-cate">House Plants</li>
<li data-value="312" class="item-cate">Indoor Living</li>
<li data-value="386" class="item-cate f1">Bridge</li>
<li data-value="385" class="item-cate f1">Hub</li>
<li data-value="384" class="item-cate f1">Repeater</li>
<li data-value="387" class="item-cate f1">Switch</li>
<li data-value="308" class="item-cate f1">Video Games Cosoles</li>
<li data-value="373" class="item-cate f2">PlayStation 3</li>
<li data-value="372" class="item-cate f2">PlayStation 4</li>
<li data-value="375" class="item-cate f2">Xbox 360</li>
<li data-value="374" class="item-cate f2">Xbox One</li>
<li data-value="124" class="item-cate">Outdoor Living</li>
<li data-value="305" class="item-cate f1">Handbag</li>
<li data-value="338" class="item-cate f2">CD Players & Turntables</li>
<li data-value="335" class="item-cate f2">Home Theater Systems</li>
<li data-value="337" class="item-cate f2">Receivers & Amplifiers</li>
<li data-value="336" class="item-cate f2">Speakers</li>
<li data-value="339" class="item-cate f2">Stereo Shelf Systems</li>
<li data-value="340" class="item-cate f2">Wireless & Multiroom Audio</li>
<li data-value="125" class="item-cate f1">Accessories</li>
<li data-value="133" class="item-cate f1">Clothing</li>
<li data-value="137" class="item-cate f1">Shoes</li>
<li data-value="347" class="item-cate f2">4K UHD Streaming Media Players</li>
<li data-value="341" class="item-cate f2">Apple TV</li>
<li data-value="342" class="item-cate f2">Fire TV Streaming Media Devices</li>
<li data-value="343" class="item-cate f2">Google Chromecast</li>
<li data-value="346" class="item-cate f2">NVIDIA Shield</li>
<li data-value="344" class="item-cate f2">Roku</li>
<li data-value="348" class="item-cate f2">Streaming Blu-ray Players</li>
<li data-value="349" class="item-cate f2">Streaming Media Player Accessories</li>
<li data-value="345" class="item-cate f2">TiVo</li>
<li data-value="428" class="item-cate">Perennials</li>
<li data-value="427" class="item-cate">plant for gift</li>
<li data-value="20" class="item-cate">Shop</li>
<li data-value="307" class="item-cate f1">Saws</li>
<li data-value="415" class="item-cate f2">Fans, Heatsinks & Cooling</li>
<li data-value="416" class="item-cate f2">GPUs / Video Graphics Cards</li>
<li data-value="417" class="item-cate f2">Hard Drives & Storage</li>
<li data-value="360" class="item-cate f2">Microsoft Surface Go</li>
<li data-value="414" class="item-cate f2">Optical Drives</li>
<li data-value="48" class="item-cate f1">Concrete Tools</li>
<li data-value="361" class="item-cate f2">4G LTE Tablets</li>
<li data-value="358" class="item-cate f2">Apple iPad</li>
<li data-value="365" class="item-cate f2">E-Readers</li>
<li data-value="364" class="item-cate f2">iPad & Tablet Accessories</li>
<li data-value="362" class="item-cate f2">Kids' Tablets</li>
<li data-value="50" class="item-cate f1">Drills</li>
<li data-value="418" class="item-cate f2">Cables & Connectors</li>
<li data-value="419" class="item-cate f2">Cleaning Equipment & Kits</li>
<li data-value="420" class="item-cate f2">Computer Speakers</li>
<li data-value="421" class="item-cate f2">Graphics Tablets</li>
<li data-value="363" class="item-cate f2">Refurbished Tablets</li>
<li data-value="304" class="item-cate f1">Sanders</li>
<li data-value="423" class="item-cate f2">Computer Cards & Components</li>
<li data-value="424" class="item-cate f2">Desktop & All-in-One Computers</li>
<li data-value="359" class="item-cate f2">Microsoft Surface Pro</li>
<li data-value="422" class="item-cate f2">Printers, Ink & Toner</li>
<li data-value="56" class="item-cate">Tools</li>
<li data-value="84" class="item-cate f1">Shoes</li>
<li data-value="328" class="item-cate f2">Accessories</li>
<li data-value="329" class="item-cate f2">Bags & Cases</li>
<li data-value="330" class="item-cate f2">Binoculars & Scopes</li>
<li data-value="331" class="item-cate f2">Digital Cameras</li>
<li data-value="332" class="item-cate f2">Film Photography</li>
<li data-value="333" class="item-cate f2">Flashes</li>
<li data-value="334" class="item-cate f2">Lighting & Studio</li>
<li data-value="86" class="item-cate f1">Clothing</li>
<li data-value="396" class="item-cate f2">DSLR Body & Lens</li>
<li data-value="397" class="item-cate f2">DSLR Body Only</li>
<li data-value="399" class="item-cate f2">DSLR Lenses</li>
<li data-value="398" class="item-cate f2">DSLR Package Deals</li>
<li data-value="62" class="item-cate f1">Handbag</li>
<li data-value="401" class="item-cate f2">Camera Lenses</li>
<li data-value="400" class="item-cate f2">DSLR Lenses</li>
<li data-value="402" class="item-cate f2">Lens Accessories</li>
<li data-value="91" class="item-cate f1">Accessories</li>
<li data-value="407" class="item-cate f2">Bower</li>
<li data-value="411" class="item-cate f2">Celestron</li>
<li data-value="412" class="item-cate f2">Flipbac</li>
<li data-value="409" class="item-cate f2">Gary Fong</li>
<li data-value="413" class="item-cate f2">GigaPan</li>
<li data-value="408" class="item-cate f2">Lowepro</li>
<li data-value="410" class="item-cate f2">SanDisk</li>
</ul>
</div>
</div>
<form class="form-horizontal" action="{{url('searchProduct')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
<input type="text" name="searchProduct" id="text-search" value="" placeholder="Search entire store here ..." class=""  />
</div>
<div id="sp-btn-search" class="">	
<button type="submit" id="btn-search-category" class="btn btn-default btn-lg">
<span>Search</span>
</button>
</div>
</form>
<div class="search-ajax">
<div class="ajax-loader-container" style="display: none;">
<img src="{{asset('tt_alula/image/catalog/AjaxLoader.gif')}}" class="ajax-load-img" width="30" height="30" alt="plazathemes.com" />
</div>
<div class="ajax-result-container">
<!-- Content of search results -->
</div>
</div>
<input type="hidden" id="ajax-search-enable" value="1" />
</div>
<script >
$(document).ready(function () {
var flag = false;
var ajax_search_enable = $('#ajax-search-enable').val();
var current_cate_value = $('ul.cate-items li.selected').data('value');
var current_cate_text = $('ul.cate-items li.selected').html();
$('.cate-selected').attr('data-value', current_cate_value);
$('.cate-selected').html(current_cate_text);
$('.hover-cate p').click(function () {
$( ".cate-items" ).toggle("slow");
});
$('.ajax-result-container').hover(
function() {
flag = true;
},
function() {
flag = false;
}
);
$('.hover-cate').hover(
function() {
flag = true;
},
function() {
flag = false;
}
);
$('#search-by-category').focusout(function() {
if(flag == true) {
$('.ajax-result-container').show();
} else {
$('.ajax-result-container').hide();
}
});
$('#search-by-category').focusin(function() {
$('.ajax-result-container').show();
});
$('#btn-search-category').click(function () {
var url = 'http://demo.towerthemes.com/tt_alula/index.php?route=product/search';
var text_search = $('#text-search').val();
if(text_search) {
url += '&search=' + encodeURIComponent(text_search);
}
var category_search = $('.cate-selected').attr("data-value");
if(category_search) {
url += '&category_id=' + encodeURIComponent(category_search);
}
location = url;
});
if(ajax_search_enable == '1') {
$('#text-search').keyup(function(e) {
var text_search = $(this).val();
var cate_search = $('.cate-selected').attr("data-value");
if(text_search != null && text_search != '') {
ajaxSearch(text_search, cate_search);
} else {
$('.ajax-result-container').html('');
$('.ajax-loader-container').hide();
}
});
$('ul.cate-items li.item-cate').click(function() {
var cate_search = $(this).data('value');
var text_search = $('#text-search').val();
$('.cate-selected').attr('data-value', cate_search);
$('.cate-selected').html($(this).html());
if(text_search != null && text_search != '') {
ajaxSearch(text_search, cate_search);
} else {
$('.ajax-result-container').html('');
$('.ajax-loader-container').hide();
}
$( ".cate-items" ).hide();
$('#text-search').focus();
});
}
function ajaxSearch(text_search, cate_search) {
$.ajax({
url         : 'http://demo.towerthemes.com/tt_alula/index.php?route=extension/module/ocsearchcategory/ajaxSearch',
type        : 'post',
data        : { text_search : text_search, cate_search : cate_search },
beforeSend  : function () {
$('.ajax-loader-container').show();
},
success     : function(json) {
if(json['success'] == true) {
$('.ajax-result-container').html(json['result_html']);
$('.ajax-loader-container').hide();
}
}
});
}
});    
</script>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<div class="top-menu fix">
<div class="container">
<div class="container-inner">
<div class="col-hoz ">
<style>
#oc-menu-5861 .oc-menu-bar {
background: #FFFFFF;
color: #FFFFFF;
padding: 15px 15px 15px 15px;
position: relative;
}
#oc-menu-5861.oc-menu-bar {
background: #FFFFFF;
color: #FFFFFF;
}
#oc-menu-5861 .ul-top-items .li-top-item {
background: #FFFFFF;
color: #333333;
}
#oc-menu-5861 .ul-top-items .li-top-item .a-top-link {
padding: 15px 20px 15px 20px;
color: #333333;
font-size: 14px;
line-height: 24px;
text-transform: uppercase;
font-weight: 600;
}
#oc-menu-5861 .ul-top-items .li-top-item:hover, #oc-menu-5861 .ul-top-items .li-top-item.active {
background: #FFFFFF;
color: #3A9943;
}
#oc-menu-5861 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-5861 .ul-top-items .li-top-item.active .a-top-link{
color: #3A9943;
font-weight: 600;
}
#oc-menu-5861 .mega-menu-container {
width: 100%;
background: #FFFFFF;
padding: 25px 30px 30px 30px;
}
#oc-menu-5861 .mega-menu-container .a-mega-second-link,#oc-menu-5861 .mega-menu-container .widget-html-title {
color: #333333;
}
#oc-menu-5861 .mega-menu-container .a-mega-third-link {
color: #666666;
}
#oc-menu-5861 .ul-second-items .li-second-items {
background: #FFFFFF;
color: #333333;
}
#oc-menu-5861 .ul-second-items .li-second-items:hover, #oc-menu-5861 .ul-second-items .li-second-items.active {
background: #FFFFFF;
color: #3A9943;
}
#oc-menu-5861 .ul-second-items .li-second-items .a-second-link {
color: #333333;
font-size: 14px;
text-transform: uppercase;
font-weight: 600;
}
#oc-menu-5861 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-5861 .ul-second-items .li-second-items.active .a-second-link {
color: #3A9943;
font-weight: 600;
}
#oc-menu-5861 .ul-third-items .li-third-items {
background: #FFFFFF;
}
#oc-menu-5861 .ul-third-items .li-third-items:hover, #oc-menu-5861 .ul-third-items .li-third-items.active {
background: #FFFFFF;
}
#oc-menu-5861 .ul-third-items .li-third-items .a-third-link {
color: #666666;
font-size: 14px;
text-transform: capitalize;
font-weight: 300;
}
#oc-menu-5861 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-5861 .ul-third-items .li-third-items.active .a-third-link {
color: #3A9943;
font-weight: 300;
}
</style>
<div class="oc-menu horizontal-menu oc-menu-bar visible-lg visible-md" id="oc-menu-5861">
<input type="hidden" id="menu-effect-5861" class="menu-effect" value="none" />
<ul class="ul-top-items">
<li class="li-top-item left" style="float: left">
<a class="a-top-link" href="{{URL::to('home')}}">
<span>Home</span>
</a>
</li>
<li class="li-top-item left" style="float: left">
<a class="a-top-link" href="">
<span>Shop</span>
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
</a>
<!-- Mega Menu -->
<div class="mega-menu-container sub-menu-container left  full-width ">
<div class="row">
@foreach($categoryData as $cat)
<div class="col-md-3 sub-item2-content sub-item2-category-content" data-cols="3">
<h4><a class="a-mega-second-link" href="{{URL::to('categoryDetails/'.$cat->categoryId)}}">{{$cat->categoryName}}</a></h4>
@foreach($cat->brands as $brand)
<div class="sub_item3-content">
<h5><a class="a-mega-third-link" href="{{URL::to('brandDetails/'.$brand->brandId)}}">{{$brand->brandName}}</a></h5>
</div>
@endforeach
</div>
@endforeach
<div class="col-md-12 sub-item2-content" data-cols="12">
<p class="widget-html-title"></p>
<div><div class="banner-static static-bottom-menu">
<div class="image">
<a href="tt_alula/index-php_route_product/category_path_20.html"><img src="{{asset('tt_alula/image/catalog/cmsblock/img-bottom-menu.jpg')}}" alt="img-bottom-menu"></a>
</div>
</div></div>
</div>
</div>
</div>
<!-- Flyout Menu -->
</li>
<li class="li-top-item left" style="float: left">
<a class="a-top-link" href="{{URL::to('showCategory')}}">
<span>Categories</span>
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
</a>
<!-- Mega Menu -->
<!-- Flyout Menu -->
<div class="flyout-menu-container sub-menu-container left">
<ul class="ul-second-items">
@foreach($categoryData as $cat)	
<li class="li-second-items">
<a href="{{URL::to('categoryDetails/'.$cat->categoryId)}}" class="a-second-link a-item">
<span class="a-second-title">{{$cat->categoryName}}</span>
</a>
</li>
@endforeach
</ul>
</div>
</li>
<li class="li-top-item left" style="float: left">
<a class="a-top-link" href="{{URL::to('addContact')}}">
<span>Contact us</span>
</a>
</li>
<li class="li-top-item left" style="float: left">
<a class="a-top-link" href="{{URL::to('showOffer')}}">
<span>Offers</span>
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
</a>
<!-- Mega Menu -->
<!-- Flyout Menu -->
<div class="flyout-menu-container sub-menu-container left">
<ul class="ul-second-items">
@foreach($offerData as $off)	
<li class="li-second-items">
<a href="{{URL::to('offerDetails/'.$off->offerId)}}" class="a-second-link a-item">
<span class="a-second-title">{{$off->offerName}}</span>
</a>
</li>
@endforeach
</ul>
</div>
</li>
<li class="li-top-item left" style="float: left">
<a class="a-top-link" href="{{URL::to('showBrand')}}">
<span>Brands</span>
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
</a>
<!-- Mega Menu -->
<!-- Flyout Menu -->
<div class="flyout-menu-container sub-menu-container left">
<ul class="ul-second-items">
@foreach($brandData as $brand)	
<li class="li-second-items">
<a href="{{URL::to('brandDetails/'.$brand->brandId)}}" class="a-second-link a-item">
<span class="a-second-title">{{$brand->brandName}}</span>
</a>
</li>
@endforeach
</ul>
</div>
</li>
</ul>
</div>
</div>
<style>
#img1:hover .img-zoom {
  cursor: pointer;
  transform: scale(1.3);
}

.img-zoom {
  width: 100%;
  transform: scale(1);
  transition: all .2s ease;
}
.product-section-imges{
	display: grid;
	grid-template-columns:repeat(6 , 1fr);
	grid-gap:20px;
	margin-top: 20px;

}
#product-section-thumbnail{
	display: flex;
	align-items:center;
	border: 1px solid lightgray;
	min-height: 66px;
	cursor: pointer;
}
#product-section-thumbnails{
	display: flex;
	align-items:center;
	border: 1px solid lightgray;
	min-height: 66px;
	cursor: pointer;
}
#product-section-thumbnailss{
	display: flex;
	align-items:center;
	border: 1px solid lightgray;
	min-height: 66px;
	cursor: pointer;
}
.img-wrapper img:hover {
    transition: all .2s ease;
    vertical-align: middle;
    transform:scale(1.5);
}
#oc-menu-2433 .oc-menu-bar {
background: #FFFFFF;
color: #333333;
padding: 14px 15px 14px 15px;
position: relative;
}
#oc-menu-2433.oc-menu-bar {
background: #FFFFFF;
color: #333333;
}
#oc-menu-2433 .ul-top-items .li-top-item {
background: #FFFFFF;
color: #333333;
}
#oc-menu-2433 .ul-top-items .li-top-item .a-top-link {
padding: 5px 20px 5px 20px;
color: #333333;
font-size: 14px;
line-height: 25px;
text-transform: uppercase;
font-weight: 600;
}
#oc-menu-2433 .ul-top-items .li-top-item:hover, #oc-menu-2433 .ul-top-items .li-top-item.active {
background: #FFFFFF;
color: #3A9943;
}
#oc-menu-2433 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-2433 .ul-top-items .li-top-item.active .a-top-link{
color: #3A9943;
font-weight: 600;
}
#oc-menu-2433 .mega-menu-container {
width: 100%;
background: #FFFFFF;
padding: 30px 30px 30px 30px;
}
#oc-menu-2433 .mega-menu-container .a-mega-second-link,#oc-menu-2433 .mega-menu-container .widget-html-title {
color: #FFFFFF;
}
#oc-menu-2433 .mega-menu-container .a-mega-third-link {
color: #FFFFFF;
}
#oc-menu-2433 .ul-second-items .li-second-items {
background: #FFFFFF;
color: #333333;
}
#oc-menu-2433 .ul-second-items .li-second-items:hover, #oc-menu-2433 .ul-second-items .li-second-items.active {
background: #FFFFFF;
color: #3A9943;
}
#oc-menu-2433 .ul-second-items .li-second-items .a-second-link {
color: #333333;
font-size: 14px;
text-transform: capitalize;
font-weight: 600;
}
#oc-menu-2433 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-2433 .ul-second-items .li-second-items.active .a-second-link {
color: #3A9943;
font-weight: 600;
}
#oc-menu-2433 .ul-third-items .li-third-items {
background: #FFFFFF;
}
#oc-menu-2433 .ul-third-items .li-third-items:hover, #oc-menu-2433 .ul-third-items .li-third-items.active {
background: #FFFFFF;
}
#oc-menu-2433 .ul-third-items .li-third-items .a-third-link {
color: #666666;
font-size: 14px;
text-transform: capitalize;
font-weight: 300;
}
#oc-menu-2433 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-2433 .ul-third-items .li-third-items.active .a-third-link {
color: #3A9943;
font-weight: 300;
}
</style>
<div class="oc-menu mobile-menu hidden-lg hidden-md" id="oc-menu-2433">
<input type="hidden" id="menu-effect-2433" class="menu-effect" value="none" />
<div class="oc-menu-bar">
<div class="left"><i class="lnr lnr-text-align-left"></i> <span>Mobile Menu</span></div>
<div class="right"><i class="ion-ios-arrow-down" aria-hidden="true"></i></div>
</div>
<ul class="ul-top-items">
<li class="li-top-item">
<a class="a-top-link a-item" href="">
<span>Home</span>
</a>
</li>
@foreach($categoryData as $category)
<li class="li-top-item">
<a class="a-top-link a-item" href="{{URL::to('categoryDetails/'.$category->categoryId)}}">
<span>{{$category->categoryName}}</span>
</a>
<span class="top-click-show a-click-show">
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
<i class="ion-ios-arrow-up" aria-hidden="true"></i>
</span>
@foreach($category->brands as $brand)
<div class="sub-menu-container">
<ul class="ul-second-items">

<li class="li-second-items">
<a href="{{URL::to('brandDetails/'.$brand->brandId)}}" class="a-second-link a-item">
<span class="a-second-title">{{$brand->brandName}}</span>
</a>
</li>
</ul>
</div>
@endforeach
</li>
@endforeach
<li class="li-top-item">
<a class="a-top-link a-item" href="{{URL::to('aboutUs')}}">
<span>About us</span>
</a>
</li>
<li class="li-top-item">
<a class="a-top-link a-item" href="{{URL::to('addContact')}}">
<span>Contact us</span>
</a>
</li>
<li class="li-top-item">
<a class="a-top-link a-item" href="{{URL::to('showBrand')}}">
<span>Categories</span>
</a>
<span class="top-click-show a-click-show">
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
<i class="ion-ios-arrow-up" aria-hidden="true"></i>
</span>
@foreach($categoryData as $category)
<div class="sub-menu-container">
<ul class="ul-second-items">

<li class="li-second-items">
<a href="{{URL::to('categoryDetails/'.$category->categoryId)}}" class="a-second-link a-item">
<span class="a-second-title">{{$category->categoryName}}</span>
</a>
</li>
</ul>
</div>
@endforeach
</li>
<li class="li-top-item">
<a class="a-top-link a-item" href="{{URL::to('showBrand')}}">
<span>Brands</span>
</a>
<span class="top-click-show a-click-show">
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
<i class="ion-ios-arrow-up" aria-hidden="true"></i>
</span>
@foreach($brandData as $brand)
<div class="sub-menu-container">
<ul class="ul-second-items">

<li class="li-second-items">
<a href="{{URL::to('brandDetails/'.$brand->brandId)}}" class="a-second-link a-item">
<span class="a-second-title">{{$brand->brandName}}</span>
</a>
</li>
</ul>
</div>
@endforeach
</li>
<li class="li-top-item">
<a class="a-top-link a-item" href="{{URL::to('showOffer')}}">
<span>Offers</span>
</a>
<span class="top-click-show a-click-show">
<i class="ion-ios-arrow-down" aria-hidden="true"></i>
<i class="ion-ios-arrow-up" aria-hidden="true"></i>
</span>
@foreach($offerData as $offer)
<div class="sub-menu-container">
<ul class="ul-second-items">

<li class="li-second-items">
<a href="{{URL::to('offerDetails/'.$offer->offerId)}}" class="a-second-link a-item">
<span class="a-second-title">{{$offer->offerName}}</span>
</a>
</li>
</ul>
</div>
@endforeach
</li>
</ul>
</div>
</div>
</div>



</div>

</header>

<div id="product-product" class="container">
<ul class="breadcrumb">
<li><a href="index.php-route=common|home.html">Home</a></li>
<li><a href="index.php-route=product|manufacturer.html">Brand</a></li>
<li><a href="index.php-route=product|manufacturer|info&manufacturer_id=5.html">HTC</a></li>
<li><a href="index.php-route=product|product&manufacturer_id=5&product_id=53.html">Sony KD55X72 55-Inch  4k Ultra HD</a></li>
</ul>
<div class="row" style="margin-top:20px">
<div id="content" class="col-sm-12">

<div class="row">
<div class="product-image-main col-sm-6">
<input type="hidden" id="check-use-zoom" value="1" />
<input type="hidden" id="light-box-position" value="1" />
<input type="hidden" id="product-identify" value="{{$product->productId}}" />
<div class="lightbox-container"></div>
<div class="img-wrapper" id="currentImage" data-scale="1.5">

<img id="changedImages" src="{{URL::to('storage/app/public/'.App\Image::where('product_id' , $product->productId)->first()->imageNameOne)}}" title="{{$product->productName}}"
style="width:450px;height:350px">
</div><br>
<div class="product-section-imges">
<div onClick="changeImage()" >
<img id="product-section-thumbnail" src="{{URL::to('storage/app/public/'.App\Image::where('product_id' , $product->productId)->first()->imageNameTwo)}}" title="{{$product->productName}}" style="width:200px;height:80px">
</div>
<div onClick="changesImage()">
<img id="product-section-thumbnails" src="{{URL::to('storage/app/public/'.App\Image::where('product_id' , $product->productId)->first()->imageNameThree)}}" title="{{$product->productName}}" style="width:200px;height:80px">
</div>
<div onClick="changessImage()">
<img id="product-section-thumbnailss" src="{{URL::to('storage/app/public/'.App\Image::where('product_id' , $product->productId)->first()->imageNameOne)}}" title="{{$product->productName}}" style="width:200px;height:80px">
</div>
</div>
<script>
function changeImage()
{
	var currentImage=document.getElementById("product-section-thumbnail").src;
	
    document.getElementById("changedImages").src=currentImage;
}
function changesImage()
{
	
	var currentsImage=document.getElementById("product-section-thumbnails").src;
	
    document.getElementById("changedImages").src=currentsImage;
}
function changessImage()
{
	
var currentssImage=document.getElementById("product-section-thumbnailss").src;	
    document.getElementById("changedImages").src=currentssImage;
}
</script>
</div>
<div class="col-sm-6 product-info-main">
<div class="inner">
<h1 class="product-name">{{$product->productName}}</h1>

<div class="ratings">

<div class="rating-box">	
<div class="rating{{App\Review::where('product_id' , $product->productId)->max('reviewRate')}}">rating</div>
</div>
<a href="index.blade.php#tab-review" data-toggle="tab" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('ul.nav-tabs').offset().top}, 800); return false;">Reviews ({{App\Review::where('product_id' , $product->productId)->count()}})</a>
<a href="index.blade.php#tab-review" data-toggle="tab" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('ul.nav-tabs').offset().top}, 800); return false;">Write Review</a>
</div>	
@if($product->newPrice > 0)	
<div class="price-box">
<p class="special-price"><span class="price">{{$product->newPrice}}L.E</span></p>
<p class="old-price"><span class="price">{{$product->productPrice}}L.E</span></p>						  
<p class="price-tax"><span class="price">Ex Tax: $80.00</span></p>
</div>
@else
<div class="price-box">
<p class="special-price"><span class="price">{{$product->productPrice}}L.E</span></p>
</div>
@endif
<ul class="list-unstyled">

<li>Product Sells: <span>{{$product->productSold}}</span></li>

<li>Brands <a href="{{URL::to('brandDetails/'.$product->brand_id)}}">{{App\Brand::where('brandId' , $product->brand_id)->first()->brandName}}</a></li>
<li>Product Code: <span>{{$product->productId}}</span></li>
<li>Availability: <span class="text-success">{{$product->productQuantity - $product->productSold}}</span><span>In Stock</span></li>

</ul>
<p class="short-des">{{$product->productDetails}}</p>

<div id="product">
<div class="form-group">
<form class="form-horizontal" action="{{url('addCart')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
<table><tr><td valign="middle">              	
<label class="control-label" for="input-quantity">Qty</label></td>
<td><input type="text" name="quantity" value="1" size="2" class="form-control" /></td>
<td><input type="hidden" name="productId" value="{{$product->productId}}" /></td>
<td style="width:10px"></td>
<td><input type="submit" class="btn btn-default"value="Add to Cart"></td></tr></table>
</form>
@if($userId)
<a href="{{URL::to('addFavourity/'.$userId.'/'.$product->productId)}}">
<button type="button"  class="btn btn-default button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('53');">Add to Wish List</button>
</a>
<a href="{{URL::to('addCompare/'.$userId.'/'.$product->productId)}}">
<button type="button"  class="btn btn-default button btn-compare" title="Compare this Product" onclick="compare.add('53');">Compare this Product</button>
</a>
@endif
</div>
</div>
<div class="policy-block policy-block-2">
<div class="inner">
<div class="col ">
<div class="box">

<div class="text">
<p>Free Shipping</p>
<p>Ships Today</p>
</div>
</div>
</div>
<div class="col ">
<div class="box">

<div class="text">
<p>Easy</p>
<p>Returns</p>
</div>
</div>
</div>
<div class="col ">
<div class="box">

<div class="text">
<p>Lowest Price</p>
<p>Guarantee</p>
</div>
</div>
</div>

</div>
</div>


<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style" data-url="http://demo.towerthemes.com/tt_alula/index.php?route=product/product&amp;product_id=53"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
<!-- AddThis Button END --> 

</div>		
</div>
</div>
</div>		
</div>

<div class="product-info-detailed">
<ul class="nav nav-tabs">
<li class="active"><a href="index.html#tab-description" data-toggle="tab">Description</a></li>
<li><a href="index.blade.php#tab-review" data-toggle="tab">Reviews ({{App\Review::where('product_id' , $product->productId)->count()}})</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab-description"><p>
<p>
<strong>{{$product->productDetails}}</strong></p>

</div>
<div class="tab-pane" id="tab-review">
<form class="form-horizontal" id="form-review" action="{{url('saveReview',$product->productId)}}" method="post">
{{ csrf_field() }}
<div id="review">
@foreach($reviewProducts as $review)
<table class="table table-striped table-bordered">
<tbody>
<tr>
<td style="width:50%"><strong>{{$review->userName}}</strong></td>
<td class="text-right">{{$review->reviewDate}}</td>
</tr>
<tr>
<td colspan="2">
<p>{{$review->reviewDetails}}</p>
<div class="rating-box">
<div class="rating{{$review->reviewRate}}">rating</div>
</div>
</td>
</tr>	
</tbody>	
</table>
@endforeach
</div>
<h2>Write a review</h2>
<div class="form-group required">
<div class="col-sm-12">
<label class="control-label" for="input-name">Your Name</label>
<input type="text" name="reviewName" value="" id="input-name" class="form-control" />
</div>
</div>
<div class="form-group required">
<div class="col-sm-12">
<label class="control-label" for="input-review">Your Review</label>
<textarea name="reviewText" rows="5" id="input-review" class="form-control"></textarea>
<div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
</div>
</div>
<div class="form-group required">
<div class="col-sm-12">
<label class="control-label">Rating</label>
&nbsp;&nbsp;&nbsp; Bad&nbsp;
<input type="radio" name="rating" value="1" />
&nbsp;
<input type="radio" name="rating" value="2" />
&nbsp;
<input type="radio" name="rating" value="3" />
&nbsp;
<input type="radio" name="rating" value="4" />
&nbsp;
<input type="radio" name="rating" value="5" />
&nbsp;Good</div>
</div>

<div class="buttons clearfix">
<div class="pull-right">
<input type="submit" class="btn btn-primary" value="Continue">
</div>
</div>
</form>
</div>
</div>
</div>
<div class="related-products module-grid module-nav2">
<div class="module-title">
<h2>Related Products</h2>

</div>

<div class="owl-container">
<div class="related-container tt-product owl-carousel owl-theme">
@foreach($relatedProducts as $relateProduct)	
<div class="row_items">
<div class="product-layout grid-style">
<div class="product-thumb transition">
<div class="item">		
<div class="item-inner">
@foreach($relateProduct->images as $img)	
<div class="image images-container">
<a href="{{URL::to('productDetails/'.$relateProduct->productId)}}" class="product-image">
<img src="{{URL::to('storage/app/public/'.$img->imageNameOne)}}" style="width:300px;height:200px">
</a>
@if($relateProduct->salePercentage >0)				  
<div class="box-label">	
<div class="label-product label_sale"><span>-{{$relateProduct->salePercentage}}% </span></div>
</div>
@endif
<div class="action-links">
<?php
$total=($relateProduct->productQuantity) - ($relateProduct->productSold);
$count=App\Review::where('product_id' , $relateProduct->productId)->max('reviewRate');
$reviewCount=App\Review::where('product_id' , $relateProduct->productId)->count();
?>		
 <button class="show-modal btn-quickview" title="Quick View" data-id="{{$relateProduct->productId}}"
  data-title="{{$relateProduct->productName}}" data-content="{{$relateProduct->productDetails}}"
data-todo="{{$total}}products" data-body="{{$relateProduct->productSold}}products"
  data-namee="{{URL::to('storage/app/public/'.$img->imageNameOne)}}" 
  data-name="{{$relateProduct->newPrice}}L.E" data-user="{{$userId}}" 
  data-count="{{$count}}" data-review="Reviews( {{$reviewCount}} )"><span>Quick View</span></button>
@if($userId)
<a href="{{URL::to('addFavourity/'.$userId.'/'.$relateProduct->productId)}}"><button class="button btn-wishlist" type="button"  title="Add to Wish List"><span>Add to Wish List</span></button></a>
<a href="{{URL::to('addCompare/'.$userId.'/'.$relateProduct->productId)}}"><button class="button btn-compare" type="button"  title="Compare this Product"><span>Compare this Product</span></button></a>
@else
<a href="{{URL::to('showLogin')}}"><button class="button btn-wishlist" type="button"  title="Add to Wish List"><span>Add to Wish List</span></button></a>
<a href="{{URL::to('showLogin')}}"><button class="button btn-compare" type="button"  title="Compare this Product"><span>Compare this Product</span></button></a>
@endif
</div>
</div><!-- image -->
@endforeach
<div class="caption">
<div class="inner">
	<div>
<div class="col-md-7">
<p>Sold:<span class="text-success">{{$relateProduct->productSold}}</span></p>
</div>
<div class="col-md-5">	
<p>Availabe:<span class="text-success">{{$relateProduct->productQuantity - $relateProduct->productSold}}</span></p>
</div>
<div class="bar-percent" >
<div class="available-percent" style="width:{{(($relateProduct->productQuantity - $relateProduct->productSold)*100) / $relateProduct->productQuantity}}%;"></div>
</div>
</div>
<div>
<h4 class="product-name"><a href="index.php-route=product|product&product_id=51.html">
{{$relateProduct->productName}}</a></h4>
</div>
<div class="rating-box">	
<div class="rating{{App\Review::where('product_id' , $relateProduct->productId)->max('reviewRate')}}">rating</div>
</div>
@if($relateProduct->newPrice > 0)	
<div class="price-box">
<p class="special-price"><span class="price">{{$relateProduct->newPrice}}L.E</span></p>
<p class="old-price"><span class="price">{{$relateProduct->productPrice}}L.E</span></p>						  
<p class="price-tax"><span class="price">Ex Tax: $80.00</span></p>
</div>
@else
<div class="price-box">
<p class="special-price"><span class="price">{{$relateProduct->productPrice}}L.E</span></p>
</div>
@endif
<a href="{{URL::to('productDetails/'.$relateProduct->productId)}}">
<div>
<button class="button btn-cart" title="Add to Cart"></button>
</div>
</a>
</div>
</div><!-- caption -->


</div>
</div>
</div><!-- product-thumb -->						
</div><!-- product-layout -->        
</div>
@endforeach
</div>
</div>
</div>

<div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                   <div class="row">
<div id="content" class="col-md-12">

<div class="row">
<div class="product-image-main col-md-4">

<input type="hidden" id="check-use-zoom" value="1" />
<input type="hidden" id="light-box-position" value="1" />
<input type="hidden" id="product-identify" value="53" />
<div class="lightbox-container"></div>
<div class="product-zoom-image">
<a href="image/cache/catalog/product/15-700x700.jpg" class="cloud-zoom main-image" id="product-cloud-zoom" style="width: 600px; height: 600px;"
rel="showTitle: false ,
zoomWidth:600,zoomHeight:600,
position:'inside', adjustX: 0 ">
<img id="productImage" src="" title="Sony KD55X72 55-Inch  4k Ultra HD" alt="Sony KD55X72 55-Inch  4k Ultra HD" />
</a>
</div>
</div>
<div class="col-md-8 product-info-main">
<div class="inner"> 		
<a id="productNameDetails" href="productName"><h1 class="product-name" id="productName"></h1></a>
<div class="ratings">
<div class="rating-box">
<div id="rateCount" class="rating3">rating</div>
</div>
<a id="countReview" href="index.blade.php#tab-review" >
	</a>
<a id="writeReview" href="index.blade.php#tab-review">Write Review</a>
</div>	
<div class="price-box box-special">
<p class="special-price"><span class="price" id="newPrice"></span></p>
</div>
<ul class="list-unstyled">

<li>Product Code: <span id="productId"></span></li>
<li>Average Sold: <span id="sold"></span></li>
<li>Availability: <span id="available"></span></li>

</ul>
<p class="short-des"></p>
<div class="col-md-12" style="margin-left:100px">
<a id="productDetails" href="productDetails">
<button class="btn btn-success">Addd To Cart</button>	
</a>
</div>
@if($userId)
<div class="col-md-12">
<div class="col-md-6">
<a id="addFavourity" href="addFavourity">
<button type="button"  class="btn btn-default button btn-wishlist" title="Add to Wish List">Add to Wish List</button>
</a>
</div>
<div class="col-md-6">
<a id="addCompare" href="addCompare">
<button type="button"  class="btn btn-default button btn-compare" title="Compare this Product">Compare this Product</button>
</a>
</div>
</div>
@else
<a href="{{URL::to('showLogin')}}">
<button type="button"  class="btn btn-default button btn-wishlist" title="Add to Wish List">Add to Wish List</button>
</a>
<a href="{{URL::to('showLogin')}}">
<button type="button"  class="btn btn-default button btn-compare" title="Compare this Product" >Compare this Product</button>
</a>
@endif
<div id="product">

</div>
</div>		
</div>
</div>
</div>		
</div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript"><!--
$(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            var productId=$(this).data('id');
            var userId=$(this).data('user');
            var countId=$(this).data('count');
            $('#productDetails').attr('href','http://taibahvisitor.com/storeProject/productDetails/'+productId);
            $('#productNameDetails').attr('href','http://taibahvisitor.com/storeProject/productDetails/'+productId);            
            $('#addFavourity').attr('href','http://taibahvisitor.com/storeProject/addFavourity/'+userId+'/'+productId);
            $('#addCompare').attr('href','http://taibahvisitor.com/storeProject/addCompare/'+userId+'/'+productId);
            $('#writeReview').attr('href','http://taibahvisitor.com/storeProject/productDetails/'+productId);            
            $('#countReview').attr('href','http://taibahvisitor.com/storeProject/productDetails/'+productId);            
            $('#rateCount').attr('class','rating'+countId);            
            $('#productId').html($(this).data('id'));
            $('#productName').html($(this).data('title'));
            $('#countReview').html($(this).data('review'));
            $('.short-des').html($(this).data('content'));
            $('#available').html($(this).data('todo'));
            $('#sold').html($(this).data('body'));
            $('#sub_show').val($(this).data('name'));
            $('#name_show').val($(this).data('namee'));
            $('#newPrice').html($(this).data('name'));
              var image=$(this).data('namee');
              $('#productImage').attr('src',image);
            $('#showModal').modal('show');
        });
$(document).ready(function() {
$('body').addClass('product-details');
$('.related-container').owlCarousel({
nav: true,
dots: false,
navSpeed: 1000,
margin: 0,
responsive:{
0:{
items: 1,
nav: false
},
480:{
items: 2,
nav: false
},
768:{
items: 2
},
992:{
items: 3
},
1200:{
items: 4
}

},
onInitialized: function() {
owlAction();
},
onTranslated: function() {
owlAction();
}	
});
function owlAction() {
$(".related-container .owl-item").removeClass('first');
$(".related-container .owl-item").removeClass('last');
$(".related-container .owl-item").removeClass('before-active');
$(".related-container .owl-item.active:first").addClass('first');
$(".related-container .owl-item.active:last").addClass('last');
$('.related-container .owl-item.active:first').prev().addClass('before-active');
}
});



$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
$.ajax({
url: 'index.php?route=product/product/getRecurringDescription',
type: 'post',
data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
dataType: 'json',
beforeSend: function() {
$('#recurring-description').html('');
},
success: function(json) {
$('.alert-dismissible, .text-danger').remove();

if (json['success']) {
$('#recurring-description').html(json['success']);
}
}
});
});
//--></script>
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
$.ajax({
url: 'index.php?route=checkout/cart/add',
type: 'post',
data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
dataType: 'json',
beforeSend: function() {
$('#button-cart').button('loading');
},
complete: function() {
$('#button-cart').button('reset');
},
success: function(json) {
$('.alert-dismissible, .text-danger').remove();
$('.form-group').removeClass('has-error');

if (json['error']) {
if (json['error']['option']) {
for (i in json['error']['option']) {
var element = $('#input-option' + i.replace('_', '-'));

if (element.parent().hasClass('input-group')) {
element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
} else {
element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
}
}
}

if (json['error']['recurring']) {
$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
}

// Highlight any found errors
$('.text-danger').parent().addClass('has-error');
}

if (json['success']) {
$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

$('#cart > button').html('<span id="cart-total">' + json['total'] + '</span>');

$('html, body').animate({ scrollTop: 0 }, 'slow');

$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
},
error: function(xhr, ajaxOptions, thrownError) {
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
});
//--></script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
language: 'en-gb',
pickTime: false
});

$('.datetime').datetimepicker({
language: 'en-gb',
pickDate: true,
pickTime: true
});

$('.time').datetimepicker({
language: 'en-gb',
pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
var node = this;

$('#form-upload').remove();

$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

$('#form-upload input[name=\'file\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function() {
if ($('#form-upload input[name=\'file\']').val() != '') {
clearInterval(timer);

$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData($('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function() {
$(node).button('loading');
},
complete: function() {
$(node).button('reset');
},
success: function(json) {
$('.text-danger').remove();

if (json['error']) {
$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

$(node).parent().find('input').val(json['code']);
}
},
error: function(xhr, ajaxOptions, thrownError) {
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
}
}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
e.preventDefault();
$('#review').fadeOut('slow');

$('#review').load(this.href);

$('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=53');

$('#button-review').on('click', function() {
$.ajax({
url: 'index.php?route=product/product/write&product_id=53',
type: 'post',
dataType: 'json',
data: $("#form-review").serialize(),
beforeSend: function() {
$('#button-review').button('loading');
},
complete: function() {
$('#button-review').button('reset');
},
success: function(json) {
$('.alert-dismissible').remove();

if (json['error']) {
$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
}

if (json['success']) {
$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

$('input[name=\'name\']').val('');
$('textarea[name=\'text\']').val('');
$('input[name=\'rating\']:checked').prop('checked', false);
}
}
});
});

//--></script>
<div class="brand-slider">
<div id="banner0" class="swiper-container">
<div class="swiper-wrapper"><div class="swiper-slide"><a href="#"><img src="{{asset('tt_alula/image/cache/catalog/brand/br3-164x38.png')}}" alt="br3" class="img-responsive" /></a></div>
<div class="swiper-slide"><a href="#"><img src="{{asset('tt_alula/image/cache/catalog/brand/br2-164x38.png')}}" alt="br2" class="img-responsive" /></a></div>
<div class="swiper-slide"><a href="#"><img src="{{asset('tt_alula/image/cache/catalog/brand/br1-164x38.png')}}" alt="br1" class="img-responsive" /></a></div>
<div class="swiper-slide"><a href="#"><img src="{{asset('tt_alula/image/cache/catalog/brand/br4-164x38.png')}}" alt="br4" class="img-responsive" /></a></div>
<div class="swiper-slide"><a href="#"><img src="{{asset('tt_alula/image/cache/catalog/brand/br5-164x38.png')}}" alt="br5" class="img-responsive" /></a></div>
<div class="swiper-slide"><a href="#"><img src="{{asset('tt_alula/image/cache/catalog/brand/br3-164x38.png')}}" alt="br6" class="img-responsive" /></a></div>
</div>
</div>
</div>
<script ><!--
$('#banner0').swiper({
slidesPerView: 5,
spaceBetween: 10,
autoplay: false,
loop: false,
autoplayDisableOnInteraction: false,
// Responsive breakpoints
breakpoints: {
479: {
slidesPerView: 2
},
767: {
slidesPerView: 3
},
991: {
slidesPerView: 4
},
1200: {
slidesPerView: 5
}
}
});
--></script> 
<div class="newletter-subscribe-container">
<div class="container-inner">
<div class="newletter-subscribe">
<div id="boxes-normal" class="newletter-container">
<div style="" id="dialog-normal" >
<div class="box">
<div class="newletter-title">
<h5>Subscribe newsletter to get updated</h5>
<p class="des">We’ll never share your email address with a third-party.</p>
</div>
<div class="box-content newleter-content">
<div id="frm_subscribe-normal">
<form name="subscribe" id="subscribe-normal">
<input type="text" value="" name="subscribe_email" id="subscribe_email-normal" placeholder="Enter you email address here...">
<input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
<a class="btn" onclick="email_subscribe()" title="Subscribe"><span>Subscribe</span></a>
<div id="notification-normal"></div>  
</form>
</div><!-- /#frm_subscribe -->
</div><!-- /.box-content -->
</div>
</div>
<script >
function email_subscribe(){
$.ajax({
type: 'post',
url: 'index.php?route=extension/module/newslettersubscribe/subscribe',
dataType: 'html',
data:$("#subscribe-normal").serialize(),
success: function (html) {
try {
eval(html);
} 
catch (e) {
}				
}});
}
function email_unsubscribe(){
$.ajax({
type: 'post',
url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
dataType: 'html',
data:$("#subscribe").serialize(),
success: function (html) {
try {
eval(html);
} catch (e) {
}
}}); 
$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
}
</script>
<script >
$(document).ready(function() {
$('#subscribe_email').keypress(function(e) {
if(e.which == 13) {
e.preventDefault();
email_subscribe();
}
var name= $(this).val();
$('#subscribe_name').val(name);
});
$('#subscribe_email').change(function() {
var name= $(this).val();
$('#subscribe_name').val(name);
});
});
</script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="footer-top ">
<div class="container">
<div class="container-inner">
<div class="row">
<div class="col1  col-md-4 col-sm-6 col-xs-12 col-footer">
<div class="footer-contact">
<div class="footer-content">
<a class="logo-footer" href="#"><img src="{{asset('tt_alula/image/catalog/logo/logo-footer.png')}}" alt="logo-footer"></a>
<ul class="list-unstyled text-content">
<li class="address"><p><span>Address</span>4710-4890 Breckinridge St, UK Burlington, VT 05401</p></li>
<li class="phone"><p><span>Need Help?</span>Call: 1-800-345-6789</p></li>
</ul>
</div> 		
</div>							 									 									 									 									 									 									 									 									 									 									 									
<div class="follow">
<label>Follow Us:</label>
<ul class="link-follow">
<li><a class="facebook ion-social-facebook" title="Facebook" href="https://www.facebook.com/plazathemes1"><span>facebook</span></a></li>
<li><a class="twitter ion-social-twitter" title="Twitter" href="https://twitter.com/plazathemes"><span>twitter</span></a></li>
<li><a class="google ion-social-googleplus-outline" title="Google" href="#"><span>google </span></a></li>
<li><a class="instagram ion-social-instagram-outline" title="Instagram" href="#"><span>Instagram</span></a></li>
<li><a class="youtube ion-social-youtube" title="Youtube" href="https://www.youtube.com/user/plazathemes"><span>youtube </span></a></li>
</ul>
</div> 									
</div>
<div class="col2  col-md-4 col-sm-6 col-xs-12 col-footer">
<div id="instagram_block_home" class="block">
<div class="title">
<a href="https://www.instagram.com/plazaalula/" target="_blank">Follow on instagram</a>

</div>
<div class="content_block owl-carousel owl-theme">


<div class="row_items">
<a class="fancybox " href="https://scontent.cdninstagram.com/vp/69350d8ef35be101a6dff3cda6092877/5CBFFEB4/t51.2885-15/e15/s320x320/43388047_1193031860836304_7461042202031485351_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/69350d8ef35be101a6dff3cda6092877/5CBFFEB4/t51.2885-15/e15/s320x320/43388047_1193031860836304_7461042202031485351_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>

<a class="fancybox " href="https://scontent.cdninstagram.com/vp/176ae26d43d1a6d5e6597fef876a4fc9/5CDA46FF/t51.2885-15/e15/s320x320/43272393_272645086719877_911472292895271879_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/176ae26d43d1a6d5e6597fef876a4fc9/5CDA46FF/t51.2885-15/e15/s320x320/43272393_272645086719877_911472292895271879_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>
</div>

<div class="row_items">
<a class="fancybox " href="https://scontent.cdninstagram.com/vp/6729c644c17d0a8258375b9633737767/5CBD68B9/t51.2885-15/e15/s320x320/43817913_252950665395548_2431187544249054052_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/6729c644c17d0a8258375b9633737767/5CBD68B9/t51.2885-15/e15/s320x320/43817913_252950665395548_2431187544249054052_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>

<a class="fancybox " href="https://scontent.cdninstagram.com/vp/8465e4d1b4ac38ae28896ba91b7dd18d/5CE18EC8/t51.2885-15/e15/s320x320/44626708_258757174830036_5326570888619638675_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/8465e4d1b4ac38ae28896ba91b7dd18d/5CE18EC8/t51.2885-15/e15/s320x320/44626708_258757174830036_5326570888619638675_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>
</div>

<div class="row_items">
<a class="fancybox " href="https://scontent.cdninstagram.com/vp/ae8c0fe555281f6460e722b2a7c1d3aa/5CDE6B03/t51.2885-15/e15/s320x320/43765343_913722575418785_6593469482850002437_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/ae8c0fe555281f6460e722b2a7c1d3aa/5CDE6B03/t51.2885-15/e15/s320x320/43765343_913722575418785_6593469482850002437_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>

<a class="fancybox " href="https://scontent.cdninstagram.com/vp/2df1b839fd8e32f1817bd2cbf5062be4/5CDB77F5/t51.2885-15/e15/s320x320/42561259_250029672357405_526521581969888886_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/2df1b839fd8e32f1817bd2cbf5062be4/5CDB77F5/t51.2885-15/e15/s320x320/42561259_250029672357405_526521581969888886_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>
</div>

<div class="row_items">
<a class="fancybox " href="https://scontent.cdninstagram.com/vp/f803762f187ad8533e548cbe480e2ee0/5CDF7CF5/t51.2885-15/e15/s320x320/44374087_648331312234871_389878604754015217_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/f803762f187ad8533e548cbe480e2ee0/5CDF7CF5/t51.2885-15/e15/s320x320/44374087_648331312234871_389878604754015217_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>

<a class="fancybox " href="https://scontent.cdninstagram.com/vp/c8ca18e91ddc779b10c2e64bbff76d60/5CCA1DAF/t51.2885-15/e15/s320x320/44255239_260855111290357_5053130529544588695_n.jpg?_nc_ht=scontent.cdninstagram.com" style="display: block;"><img src="https://scontent.cdninstagram.com/vp/c8ca18e91ddc779b10c2e64bbff76d60/5CCA1DAF/t51.2885-15/e15/s320x320/44255239_260855111290357_5053130529544588695_n.jpg?_nc_ht=scontent.cdninstagram.com" alt="" /></a>
</div>

</div>

<script >
$("#instagram_block_home .content_block").owlCarousel({
autoPlay:  false ,
navSpeed :  1000 ,
nav :  false ,
dots :  false ,
autoplayHoverPause : true,
margin: 10,
responsive:{
0:{
items: 2
},
480:{
items: 3
},
768:{
items: 3
},
992:{
items: 4
},
1200:{
items: 4
},
}
});
</script>
<script >
$('.content_block').magnificPopup({
type: 'image',
delegate: 'a',
gallery: {
enabled : true
}
});
</script>
</div>

</div>
<div class="col3 col-links col-md-4 col-sm-6 col-xs-12 col-footer">
<div class="footer-title"><h5>Information</h5></div>
<div class="footer-content">
<ul class="list-unstyled text-content">
<li><a href="{{URL::to('aboutUs')}}">About Us</a></li>
<li><a href="{{URL::to('deliveryInformation')}}">Delivery Information</a></li>
<li><a href="{{URL::to('privacyPolicy')}}">Privacy Policy</a></li>
<li><a href="{{URL::to('condition')}}">Terms & Conditions</a></li>
<li><a href="{{URL::to('addContact')}}">Contact Us</a></li>
<li><a href="{{URL::to('showBrand')}}">Brands</a></li>
<li><a href="{{URL::to('gift')}}">Gift Certificates</a></li>
<li><a href="{{URL::to('showOffer')}}">Specials</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom ">
<div class="container">
<div class="container-inner">
<div class="footer-copyright">
<p>Copyright &copy; 2018 <a href="http://www.plazathemes.com">PlazaThemes</a>.<span> All Right Reserved.</span></p>
</div>
<div class="payment">
<a href="#"><img src="{{asset('tt_alula/image/catalog/cmsblock/payment.png')}}" alt="payment"></a>
</div> 									 									
</div>
</div>
</div>
<div id="back-top"><i class="ion-ios-arrow-up"></i></div>
</footer>
<script >
$(document).ready(function(){
// hide #back-top first
$("#back-top").hide();
// fade in #back-top
$(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > $('body').height()/3) {
$('#back-top').fadeIn();
} else {
$('#back-top').fadeOut();
}
});
// scroll body to 0px on click
$('#back-top').click(function () {
$('body,html').animate({scrollTop: 0}, 800);
return false;
});
});
});
var clicks=0;
$(".add-cart").click(function(e){
	e.preventDefault();
	clicks++;
	$('.txt_number').html(clicks);});
</script>
<script>
$("#add").fadeTo(3000,1000).slideUp(2000,function()
{
$("#add").slideUp(4000);
});
</script>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div><!-- wrapper -->
</body></html> 
