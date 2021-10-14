<?php

namespace controllers;


use Sweetphp\Routing\Attributes\Route;

class IndexController extends BaseController{



    #[Route('/')]
    public function index(){
        $this->loadView('index.html',[]);
    }

}