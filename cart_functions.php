<?php
function ep5Desc($n1,$n2){
    $desc="Qty 1- ";
    $n1=explode('-',$n1);
  if($n1[1]==''){
      $desc=$desc.($n1[0]-2).' 1/2';
  } else {
      if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
      if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-1).' '; }
      if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-1).' 1/4'; }
  }
  $desc=$desc." x ";
  $n2=explode('-',$n2);
  if($n2[1]==''){
      $desc=$desc.($n2[0]-2).' 1/8';
  } else {
      if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8'; }
      if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8'; }
      if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8'; }
  }
  
  return $desc;
}
function ep15Desc($n1,$n2){
    $desc="Qty 1- ";
    $n1=explode('-',$n1);
  if($n1[1]==''){
      $desc=$desc.($n1[0]-2).' 1/2';
  } else {
      if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
      if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-1).' '; }
      if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-1).' 1/4'; }
  }
  $desc=$desc." x ";
  $n2=explode('-',$n2);
  if($n2[1]==''){
      $desc=$desc.($n2[0]-2).' 1/8';
  } else {
      if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8'; }
      if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8'; }
      if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8'; }
  }
  
  return $desc;
}
function ringep5Desc($n1,$n2){
    $desc="Qty 1- ";
    $n1=explode('-',$n1);
  if($n1[1]==''){
      $desc=$desc.($n1[0]-2).' 1/2';
  } else {
      if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
      if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-1).' '; }
      if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-1).' 1/4'; }
  }
  $desc=$desc." x ";
  $n2=explode('-',$n2);
  if($n2[1]==''){
      $desc=$desc.($n2[0]-2).' 1/8';
  } else {
      if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8'; }
      if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8'; }
      if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8'; }
  }
  
  return $desc;
}
function MS($n1){
    $desc=" ".$n1;

      
          
          
      
      return $desc;
}function MS2($n2,$n1){
    $desc="Qty 1- ";
    $n2=explode('-',$n2);
  if($n2[1]==''){
      $desc=$desc.($n2[0]-2).' 1/2';
  } else {
      if($n2[1]=='1/4"'){ $desc=$desc.($n2[0]-2).' -3/4'; }
      if($n2[1]=='1/2"'){ $desc=$desc.($n2[0]-1).' '; }
      if($n2[1]=='3/4"'){ $desc=$desc.($n2[0]-1).' -1/4'; }
  }
  $desc=$desc." x ";
  $n1=explode('-',$n1);
  if($n1[1]==''){
      $desc=$desc.($n1[0]-2).' 1/8';
  } else {
      if($n1[1]=='1/4"'){ $desc=$desc.($n1[0]-2).' -3/8'; }
      if($n1[1]=='1/2"'){ $desc=$desc.($n1[0]-2).' -5/8'; }
      if($n1[1]=='3/4"'){ $desc=$desc.($n1[0]-2).' -7/8'; }
  }
  
  return $desc;
}
function es53Desc($n1,$n2){
    $desc='Qty 1- 20" x ';
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.($n1[0]-2).' 1/8';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
      }
      return $desc.'"';
  
  return $desc;
}  
function B950Desc($n1){
$desc='Qty 1- 14" x ';
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.' '.($n1[0]-2);
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 1/4'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 1/2'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 3/4'; }
      }
      return $desc.'"';
}

function EP6Desc($n1,$glassheight){
if($glassheight==12)
{
$desc='Qty 1- 35 1/2" x ';	
}
elseif($glassheight==6)
{
$desc='Qty 1- 29 1/2" x ';	
}
else
{
$desc='Qty 1- 23 1/2" x ';	
}


$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.' '.($n1[0]-2).' 1/8';;
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
      }
      return $desc.'"';
} 


function EP8Desc($n1,$banner_heightss){

$desc='Qty 1- '.$banner_heightss.'" x ';	


$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.' '.($n1[0]).' ';;
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]).' 1/4'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]).' 1/2'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]).' 3/4'; }
      }
      return $desc.'"';
}

function es31Desc($n1,$n2){
    if(strcmp($n2, "+31")){
      $desc='Qty 2- 11 1/2" x ';
  }else{
      $desc='Qty 1- 14-3/8" x ';
  }	
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.($n1[0]-2).' 1/8';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
      }
      return $desc.'"';
  
  return $desc;
}  function es67Desc($n1,$n2){
    if(!strcmp($n2,"+73")){
      $desc='Qty 2- 11 1/2" x ';
  }else{
      $desc='Qty 1- 14-3/8" x ';
  }
  
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.($n1[0]-2).' 1/8';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
      }
      return $desc.'"';
  
  return $desc;
}  
function ep11Desc($n1,$n2){
    $desc="Qty 1- ";
  $desc1="Qty 1- ";
  $n3=$n1;
  
  if($n2==''){
      
      $n1=explode('-',$n1);
      
      
      if($n1[1]==''){
          $desc=$desc.'11 1/2 x '.($n1[0]-2).' 1/8';
          $desc1=$desc1.'14 3/8 x '.($n1[0]-2).' 1/8';
      }else{
          $desc=$desc.'11 1/2 x ';
          $desc1=$desc1.'14 3/8 x ';
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8';$desc1=$desc1.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8';$desc1=$desc1.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8';$desc1=$desc1.($n1[0]-2).' 7/8'; }
      }
      
  }
  else{
      $n3=explode('-',$n3);
      $desc=$desc.'11 1/2 x';
      if($n3[1]==''){
          $desc1=$desc1.($n3[0]-3).' 1/8';
      } else {
          if($n3[1]=='1/4'){ $desc1=$desc1.($n3[0]-3).' 3/8'; }
          if($n3[1]=='1/2'){ $desc1=$desc1.($n3[0]-3).' 5/8'; }
          if($n3[1]=='3/4'){ $desc1=$desc1.($n3[0]-3).' 7/8'; }
      }
      $desc1=$desc1." x ";
      $n2=explode('-',$n2);
      if($n2[1]==''){
          $desc1=$desc1.($n2[0]-2).' 1/8';
          $desc=$desc.($n2[0]-2).' 1/8';
      } else {
          if($n2[1]=='1/4'){ $desc=$desc.($n2[0]-2).' 3/8';$desc1=$desc1.($n2[0]-2).' 3/8'; }
          if($n2[1]=='1/2'){ $desc=$desc.($n2[0]-2).' 5/8';$desc1=$desc1.($n2[0]-2).' 5/8'; }
          if($n2[1]=='3/4'){ $desc=$desc.($n2[0]-2).' 7/8';$desc1=$desc1.($n2[0]-2).' 7/8'; }
      }
  }
  return $desc."</p><p>".$desc1;
}   function ed20TDesc($n1){
$desc='';
$n1=explode('-',$n1);
  if($n1[1]==''){
          $desc=$desc.($n1[0]-2).' 1/8';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
      }
      return $desc.'"';
}  
function edT2Desc($n1){
$desc='';
$n1=explode('-',$n1);
  if($n1[1]==''){
          $desc=$desc.($n1[0]-2).' 1/8';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
      }
      return $desc.'"';
}   function edLEPDesc($n1,$n2){
//$desc="Qty 1- ";
  //$desc1="Qty 1- ";
  //$n3=$n1;
  $n3=explode('-',$n2);
  $n1=$n1;
  if($n3[2]==$n1){
      
      //$desc1="dcdfvdv";
      
  }
  else{
      //$n3=explode('-',$n3);
      $desc=$n1;
  $n2=$n2;
  $n1=$n1;
    //$desc=$n1;
    
          if($n2=='1/4"'){ $desc=$desc.($n1-2).' 3/8';$desc1=$desc1.($n1-2).' 1/4'; }
          if($n2=='1/2"'){ $desc=$desc.($n1-2).' 5/8';$desc1=$desc1.($n1-2).' 1/2'; }
          if($n2=='3/4"'){ $desc=$desc.($n1-2).' 7/8';$desc1=$desc1.($n1-2).' 3/4'; }
      
      //$desc1=$desc1." x ";
      
  }
  return $desc1;
}
function es29Desc($n1){
$desc='Qty 1- 11 1/2" x ';
$n1=explode('-',$n1);
  if($n1[1]==''){
          $desc=$desc.($n1[0]-2).' 1/8';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc.($n1[0]-2).' 3/8'; }
          if($n1[1]=='1/2'){ $desc=$desc.($n1[0]-2).' 5/8'; }
          if($n1[1]=='3/4'){ $desc=$desc.($n1[0]-2).' 7/8'; }
      }
      return $desc.'"';
}  function es29TDesc($n1,$l,$gls,$lngt){
$desc='Qty 1- 11 1/2" x ';
$l1=$l2=$l3=$l4=0;
if($gls=="FG"){
  $l1=str_replace('"GL',"",$l[1]);
  if($l[2]!==""){
      $l2=str_replace('"GL',"",$l[2]);
  }
  
}else{
  
  $l1=str_replace('"/28TG',"",$l[1]);
  if($l[2]!==""){
      $l2=str_replace('"/28TG',"",$l[2]);
  }
  
}
      if($l2==''){
          if($gls=="FG"){
              $l1=($l1-2).' 1/8';
          }else{
              $l1=($l1-2).' 1/8';
          }
          
      }else{
          if($gls=="FG"){
              if($l2=='1/4'){ $l1=($l1-2).' 3/8'; }
              if($l2=='1/2'){ $l1=($l1-2).' 5/8'; }
              if($l2=='3/4'){ $l1=($l1-2).' 7/8'; }
          }else{
              if($l2=='1/4'){ $l1=($l1-2).' 3/8'; }
              if($l2=='1/2'){ $l1=($l1-2).' 5/8'; }
              if($l2=='3/4'){ $l1=($l1-2).' 7/8'; }
          }
      }
      if($gls=="FG"){
          $l4='Qty 1- 11-1/2" x '.$l1.'"';
      }else{
          $l4='Qty 1- '.($lngt-13).'-1/2" x '.$l1.'"';
      }
      //echo $l1."new";
$n1=explode('-',$n1);

      if($n1[1]==''){
          $desc=$desc.($n1[0]-2).' 1/8';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc; }
          if($n1[1]=='1/2'){ $desc=$desc; }
          if($n1[1]=='3/4'){ $desc=$desc; }
      }
      //echo $desc;
      return $l4;
} function es82TDesc($n1){
$desc='Qty 1- 11 1/2" x ';
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.' ';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc; }
          if($n1[1]=='1/2'){ $desc=$desc; }
          if($n1[1]=='3/4'){ $desc=$desc; }
      }
      return $desc;
} function es82T1Desc($n1){
$desc='';
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.' ';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc; }
          if($n1[1]=='1/2'){ $desc=$desc; }
          if($n1[1]=='3/4'){ $desc=$desc; }
      }
      return $desc;
} 
function es90TDesc($n1){
$desc='Qty 1- 11 1/2" x ';
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.' ';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc; }
          if($n1[1]=='1/2'){ $desc=$desc; }
          if($n1[1]=='3/4'){ $desc=$desc; }
      }
      return $desc;
} function es90T1Desc($n1){
$desc='';
$n1=explode('-',$n1);
      if($n1[1]==''){
          $desc=$desc.' ';
          
      }else{
          if($n1[1]=='1/4'){ $desc=$desc; }
          if($n1[1]=='1/2'){ $desc=$desc; }
          if($n1[1]=='3/4'){ $desc=$desc; }
      }
      return $desc;
}
?>