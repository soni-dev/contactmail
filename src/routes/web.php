<?php 
Route::group(["namespace"=>"Soni\ContactEmail\Http\Controllers"],function(){

Route::get("contactform",'ContactFormController@contactForm');
Route::post("contactform",'ContactFormController@saveContactForm');
});
// Route::get("contact-form",function(){
//  return view("contact::contactform");
// });