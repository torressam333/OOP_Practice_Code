<?php

//Classes = data + behavior


class Video
{
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function __construct(string $type, float $duration, string $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play()
    {
        return $this->published ? "The video is playing" : "This video is not yet available";
    }

    public function pause()
    {
        return $this->published ? "The video has been paused " : "";
    }

    public function __destruct()
    {
        var_dump("Destroying instance of " . __CLASS__);
    }

}



header('Content-Type:text/plain', true);

$introduction = new Video("MP4", 10.5, "Intro to OOP");
var_dump($introduction);

//$video2 = new video();
//var_dump($video2);

