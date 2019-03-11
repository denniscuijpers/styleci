<?php
namespace Testing\One;

class TestClass
{
  public function testMe(){
    $aaa = trim(function(){
      $a = "aa";
      $ab = "ab";
      return $a.$ab;
    });
  }
}
