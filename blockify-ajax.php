<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    $headers = getallheaders();

    if($headers['blockName']){
        block($headers['blockName']);
    }

    die();
}
