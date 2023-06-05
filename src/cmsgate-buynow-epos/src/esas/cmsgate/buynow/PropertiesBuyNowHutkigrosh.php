<?php
namespace esas\cmsgate\buynow;

use esas\cmsgate\buynow\properties\PropertiesBuyNow;
use esas\cmsgate\lang\Locale;
use esas\cmsgate\properties\ViewProperties;

class PropertiesBuyNowHutkigrosh extends PropertiesBuyNow
{
    public function getPDO_DSN() {
        return "mysql:host=127.0.0.1;dbname=cmsgate;charset=utf8";
    }

    public function getPDOUsername() {
        return 'username';
    }

    public function getPDOPassword() {
        return 'password'; // test
    }

    public function isSandbox() {
        return true;
    }

    public function getBootstrapVersion() {
        return ViewProperties::BOOTSTRAP_V5;
    }

    public function getLocale() {
        return Locale::ru_RU;
    }

    public function getDefaultClientUICssLink() {
        return "https://cmsgate-test.esas.by/cmsgate-buynow-hutkigrosh/static/default.css";
    }

    public function getRecaptchaSecretKey() {
        return "secret_key";
    }

    public function getRecaptchaPublicKey() {
        return "public_key";
    }

    public function getStorageDir() {
        return "/opt/cmsgate/storage";
    }
}