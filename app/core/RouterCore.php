<?php 

namespace app\core;

class RouterCore 
{
    private $uri;
    private $method;
    
    private $getArr = [];
    
    public function __construct()
    {
        $this->initialize();
    }

    private function initialize()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        
        $ex = explode('/',$uri);
        
        $uri = $this->normalizeURI($ex);
                
        for ($i = 0; $i < UNSET_URI_COUNT; $i++){
            unset($uri[$i]);
        }
        
        $this->uri = $this->normalizeURI($uri);
        
        if(DEBUG_URI);
            dd($this->uri); 
        
    }
    
    private function get($router, $call)
    {
        $this->getArr[] = [
            'router' => $router,
            'call' => $call,    
        ];
    }
    
    private function normalizeURI($arr)
    {
        return array_values(array_filter($arr));
    }
}
