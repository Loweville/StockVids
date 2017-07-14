<?php
    include_once("model/model.php");

    class Controller   {
        public $model;

        public function __construct()
        {
            $this->model = new Model();
        }

        public function invoke()
        {
            if(!isset($_GET["video"]))
            {
                $vids = $this->model->getVidList();
                include "view/vidlist.php";
            }
            else
            {
                $vid = $this->model->getVideo($_GET["video"]);
                include "view/viewvid.php";
            }
        }
    }
    

?>