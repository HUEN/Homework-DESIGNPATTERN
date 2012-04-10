<?php
interface IVideo
{
function play();
}
class Video implements IVideo
{
   private $title;
   public function construct($title)
   { 
      $this->title = $title;
	}
	public function play()
	{
	    echo "playing".$this->title." video";
	}
}

class VideoProxy implements IVideo 
{
    private $video;
	private $title;
	public function construct($str)
	{
	
	   this->title = $str;
	 
	 }
	 public function play()
	 {
	 
	     if ($this->video== null) $this->video = new Video($this->title);
		 $this->video->play();
		 }
	}
	
	$ob = new VideoProxy("Harry Potter III");
	$ob->play();
	
?>