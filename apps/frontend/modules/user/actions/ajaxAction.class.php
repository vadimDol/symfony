<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 22.12.2017
 * Time: 22:42
 */

class ajaxAction extends sfAction
{
    public function execute($request)
    {
        if($request->getParameter('item'))
        {

            return new Response("Rose");
        }
    }
}