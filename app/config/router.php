<?php

$this->get('/', function(){
    (new \app\controller\BaseController)->home();
});

