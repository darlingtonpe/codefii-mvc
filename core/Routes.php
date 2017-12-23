<?php

Route::set('',function(){
    HomePage::view('Index');
});

Route::set('about',function(){
  AboutUs::view('About');
   // $users = DB::getInstance()->query("SELECT * FROM users");
   //   AboutUs::view('About',array('users'=>$users));
});
