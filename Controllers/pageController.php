<?php
/* Display the main view */
    class PageController{

        public function home(){
            
            include_once('Views/pages/home.php');

        }

        public function error(){

            include_once('Views/pages/error.php');

        }
    }
?>