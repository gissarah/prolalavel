<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::fallback( function () {
 //   return redirect('/');
//});

// Route::prefix("lar")->group(function(){

//     Route::get('/', function () {
//         return view('test');
//     });
   
   
//     Route::get('test',function(){
//         return "welcome,sarah";
//     });
    
//     Route::get('test1/{id}',function($id){
//         return "the id is ". $id ;
//     });
    
//     Route::get('test2/{id?}',function($id=1){
//         return "the id is ". $id ;
//     })-> whereNumber ('id');
    
//     Route::get('test3/{id?}',function($id=1){
//         return "the id is ". $id ;
//     })-> where (['id'=>'[0-9]+']);
    
//     Route::get('test4/{name?}',function($name=null){
//         return "the name is ". $name ;
//     })-> whereAlpha ('name');
    
//     Route::get('test5/{id}/{name}',function($id,$name){
//         return "the id is ".$id ."the name is ". $name ;
//     })-> where (['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);
    
//     Route::get('product/{category}',function($cat){
//         return "the category is ".$cat ;
//     })-> whereIn ('category',['computer','lap','pc']); 
// });

// task one ...............

Route::get("about",function(){
return "this about page";
});

Route::get("contect",function(){
   return "<form action='get'>
    <input type='text' name='tittle' >
    <input type='submit' value='send to us'>
    </form>";
});

Route::get('blog/{category}',function($cat){
    return "the blogcat is ".$cat ;
 })-> whereIn ('category',['science','sports','math','medical']); 
    
 Route::get('blog', function () {
     return view('about');
 });
 /////////////////////////////////////////////////////////////////////////////////////
