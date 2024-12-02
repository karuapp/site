<?php

defined('BASEPATH') || exit('No direct script access allowed');
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../third_party/node.php';
use WpOrg\Requests\Requests as whatsbot_Requests;

class Whatsbot_aeiou
{
    public static function getPurchaseData($code)
    {
        return false;
    }

    public static function verifyPurchase($code)
    {
        return true;
    }

    public function validatePurchase($module_name)
    {
        return true;
    }
}
