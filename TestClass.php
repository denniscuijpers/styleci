<?php
namespace Testing\One;

class TestClass
{
  public function testMe(){
      $a = "aa";
      $ab = "ab";
    
    $aaa = trim(function(){
      $a = "aa";
      $ab = "ab";
      return $a.$ab;
    });
    
    $aaa = function(){
      $a = "aa";
      $ab = "ab";
      return $a.$ab;
    };
  }
}
