<?php

class Video    {
    public $name;
    public $desc;
    public $link;
    public $dur;
    public $tags;

    public function __construct($name, $desc, $link, $dur, $tags)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->link = $link;
        $this->dur = $dur;
        $this->tags = $tags;
    }
}

?>