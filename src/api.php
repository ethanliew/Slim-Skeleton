<?php

require 'config.php';
//  http://www.redbeanphp.com/index.php?p=/crud
//  http://www.redbeanphp.com/index.php?p=/finding

function person_register($email, $password)
{

  //$tbl_persons = R::dispense('urls'); //valid
  //$r = R::load( 'urls', 1 ); //reloads our book



  return  array( 'flag'=>1, 'msg'=> $r->urls, 'data'=>'');

}


/***
add urls
***/
function url_add($url, $tags)
{
  //  $tbl_persons = R::dispense('urls'); //valid
  //  $r = R::load( 'urls', 1 ); //reloads our book
 $r = R::findOne('urls', ' urls=? ', [ $url ]);


 if( empty( $r) ){
   $r = R::dispense('urls');
   $r->urls = $url;
   $r->tags = $tags;
   $r->created = date('Y-m-d H:i:s');
   $id = R::store( $r );
   return  array( 'flag'=>$id, 'msg'=> 'Url added.', 'data'=>'');
 }


   $r->urls = $url;
   $r->tags = $tags;
   $r->created = date('Y-m-d H:i:s');
   $id = R::store( $r );
   return  array( 'flag'=>$id, 'msg'=> 'Url updated.', 'data'=>'');



}
