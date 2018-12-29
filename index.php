<?php

//Classes = data + behavior


class Video
{
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function __construct($type, $duration, $title)
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

}
//header('Content-Type:text/plain', true);

$introduction = new Video("MP4", "10:30", "Intro to OOP");
$introduction->published = true;
echo $introduction->play(),PHP_EOL, $introduction->pause(), PHP_EOL;

$video2 = new video("MP4", "9:30", "Intro to OOP Video 2");
echo $video2->play(),PHP_EOL, $video2->pause(), PHP_EOL;

//var_dump($introduction);

