<?php
        require_once 'Config/Config.php';
        require_once 'Helpers/Helpers.php';

        $url = !empty($_GET['url']) ? $_GET['url'] : 'Home/Home';
        $xget = explode('/',$url);

        $controller = $xget[0];
        $method = !empty($xget[1]) ? $xget[1] : $xget[0];
        $params = '';

        if (!empty($xget[2])){
            for ($i=2;$i<count($xget);$i++){
                $params .= $xget[$i].',';
            }
            $params = trim($params,",");
        }
        require_once 'Libraries/Core/Autoload.php';
        require_once 'Libraries/Core/Load.php';



