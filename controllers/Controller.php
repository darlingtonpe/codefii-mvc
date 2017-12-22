<?php

class Controller{
      public function __construct()
      {
        parent::__construct();
      }
      public  function model($model)
      {
        require_once ("./models/$model.php");
        return new $model();
      }
      public function view($view,$data=array())
      {
          require_once 'views/'.$view.'.php';
      }
}
