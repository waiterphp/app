<?php

namespace router;

class Web extends Base
{

    public function route()
    {
        // 获取用户请求
        $path = isset($_SERVER['PATH_INFO']) ? trim($_SERVER['PATH_INFO'], '/') : 'Home/show';

        // 路由用户请求
        return $this->router->set([
            ['(\w+)/(\w+)/(\w+)', 'controller.$1.$2.$3'],
            ['(\w+)/(\w+)', 'controller.$1.$2'],            
        ])->route($path, [$this->request]);
    }
}