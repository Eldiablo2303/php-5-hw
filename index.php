<?php

//htmlentities - html_entity_decode


  $website = htmlentities ("<a href = 'google'>google</a>") ;

  echo html_entity_decode($website);

   //strrepeat

   $text = "welcome to my page";

   echo str_repeat($text, 5);

   //empty

   $nidnum = '';

   if(empty($nidnum)){
    echo "insert your nid number";
   } else  {
    if (is_numeric($nidnum)){
      echo "great";
    } else {
      echo "nid number nai";
    }
   }

   //isset

   $username = "el dioblo";
   $username1 = null;
   var_dump(isset($username));
   var_dump(isset($username1));

   //explode and end

   $tweet = "welcome to my home page";
   
   $array = explode(' ',$tweet);

   if(end($array) == 'page'){
    echo "welcome";
   } else {
    echo "page nai";
   }
  

   //implode

   $name_array = [
    'my',
     'name',
     'is',
     'imtiaz'
   ];
  echo implode(' ',$name_array);


//explode and in_array


  $email = 'test.ut.imtiaz@gmail.com';

$email_pieces = explode('.',$email);
//var_dump(in_array('ut',$email_pieces));
 if(in_array('ut',$email_pieces)){
  echo "welcome";
 }else {
  echo "invalid";
}
 

//count

$users_name =[ [
  'name' => 'wahid',
  'email' => 'testing@gmail.com',
],[
  'name' => 'wahid',
  'email' => 'testing@gmail.com',
],[
  'name' => 'wahid',
  'email' => 'testing@gmail.com',
],[
  'name' => 'wahid',
  'email' => 'testing@gmail.com',
],[
  'name' => 'wahid',
  'email' => 'testing@gmail.com',
],[
  'name' => 'wahid',
  'email' => 'testing@gmail.com',
],
];


if(count($users_name) > 5){
  echo "out of time";
} else {
  echo "complete";
}

// array_diff

$profile = [
  "name" => "jhon",
  "age" => 25,
  "addr" => "ctg", ];

$profile_update =   [
  "name" => "jhon",
  "age" => 27,
  "addr" => "dhaka", ];

  print_r(array_diff($profile,$profile_update));

  
  //array_pop
  $games = ['fifa-22','pubg','dota-2',];

  array_pop($games);

  print_r($games);

  //array_push

  $games = ['fifa-22','pubg','dota-2',];

  array_push($games,'tennis');

  print_r($games);

   
//array_shift

 $place = ['kaptai','rangamati','bandorban'];

 array_shift($place);

 print_r($place);

//array_unshift

 $place = ['kaptai','rangamati','bandorban'];

  array_unshift($place,'coxs', 'rawjan');

  print_r($place);

 //array_reverse

  $file_type = "4555.jpg.mp3.html";
$array = explode('.',$file_type);

print_r(array_reverse($array));