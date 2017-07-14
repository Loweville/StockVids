<?php
    include_once("model/video.php");
    include_once("model/connection.php");

    class Model   {
        public function getVidList()
        {
            // grabs videos from database

            $connection = new Connection();

            $sql = "SELECT * FROM StockVidsVideos";
            $result = $connection->query($sql);

            if($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $arr[$row["Name"]] = new Video($row["Name"], $row["Description"], $row["link"], $row["duration"], $row["tags"]);
                }
            }

            return $arr;


            // TESTING: hardcoded values
            /*return array(
                "Roller Coaster" => new Video("Roller Coaster", "Ladies on a roller coaster", "rollercoaster", 30, "ladies, roller, coaster, fun, theme park"),
                "Cat" => new Video("Cat", "Cat, being a cat", "cat", 11, "cat, purr, cute, animal, close-up")
            );*/
        }

        public function getVideo($name)
        {
            // grabs individual video from list
            
            $allVids = $this->getVidList();

            return $allVids[$name];
        }
    }
    

?>