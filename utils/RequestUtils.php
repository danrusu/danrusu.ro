<?php

class RequestUtils{

    public static function getRequestObj($urlParams, $server, $request){

        $finalRequest = $request;

        if (false == isset($server["HTTP_HOST"])) {

            parse_str($urlParams, $finalRequest);
        }

        return (object)$finalRequest;
    }

}
