<?php


namespace esas\cmsgate\buynow\hro;


use esas\cmsgate\bridge\view\client\RequestParamsBridge;
use esas\cmsgate\buynow\PropertiesBuyNowHutkigrosh;
use esas\cmsgate\Registry;
use esas\cmsgate\hro\HRO;
use esas\cmsgate\hro\HROTuner;
use esas\cmsgate\hro\pages\AdminLoginPageHRO;

class AdminLoginPageHROTunerBynowHutkigrosh implements HROTuner
{
    /**
     * @param AdminLoginPageHRO $hroBuilder
     * @return HRO|void
     */
    public function tune($hroBuilder) {
        return $hroBuilder
            ->setLoginField(RequestParamsBridge::LOGIN_FORM_LOGIN, "Loginn")
            ->setPasswordField(RequestParamsBridge::LOGIN_FORM_PASSWORD, 'Password')
            ->setSandbox(PropertiesBuyNowHutkigrosh::fromRegistry()->isSandbox())
            ->setMessage("Login to BuyNow " . Registry::getRegistry()->getPaysystemConnector()->getPaySystemConnectorDescriptor()->getPaySystemMachinaName());
    }
}