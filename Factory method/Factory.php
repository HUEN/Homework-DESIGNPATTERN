<?php
class factory {
   public function aquarium($fish){
   
	   return new $fish();
      	
	}
}	
?>