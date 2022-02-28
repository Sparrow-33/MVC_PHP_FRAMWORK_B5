<?php
     class Voyage extends Controller{

         public function searchVoyage(){

             $this->view('pages/index');
             include APPROOT."/views/pages/voyage.php";

         }
     }
