<?php
  
 class Singleton {
 
 #pri praveneto na construktora-private,nie sme zabranili vseki da pravi instanciq
  
  
  private static $instance;
  
  
  private function __construct(){}
  
    public static function getInstance() {
	  
	  if(self::$instance ==null)
	       {  
		       self::$instance= new Singleton();
			   
			}
			return Singleton::$instance;			
	
	}
  }
  
  
  
?>
  
  
  
  
  
  
  
  
  
  
  