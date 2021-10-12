<?php 

    include_once 'Model/Model.php';
    class Controller{

        private $model = null;
        public function __construct()
        {
            $this->model = new Model();
        }
        public function view()
        {
            if(isset($_GET['action']))
            {
                switch($_GET['action'])
                {
                    case 'a':{
                        include_once 'View/About.php';
                        break;
                    }
                    case 'b':{
                        $data = "Than Trang";
                        include_once 'View/home.php';
                        break;
                    }
                }
            }else{
                include_once 'View/home.php';
            }
           
        }
    }