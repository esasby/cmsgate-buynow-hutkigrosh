<?php


namespace esas\cmsgate\buynow\hro\client;


use esas\cmsgate\buynow\service\ResourceServiceBuyNowHutkigrosh;
use esas\cmsgate\buynow\view\client\ClientViewFieldsBuyNow;
use esas\cmsgate\hro\HRO;
use esas\cmsgate\hro\HROTuner;
use esas\cmsgate\lang\Translator;

class ClientBuyNowHomeHROTunerBuynowHutkigrosh implements HROTuner
{
    /**
     * @param ClientBuyNowHomeHRO $hroBuilder
     * @return HRO|void
     */
    public function tune($hroBuilder) {
        return$hroBuilder
            ->setPageHeaderText(Translator::fromRegistry()->translate(ClientViewFieldsBuyNow::HOME_PAGE_HEADER))
            ->setPageHeaderDetailsText(Translator::fromRegistry()->translate(ClientViewFieldsBuyNow::HOME_PAGE_HEADER_DETAILS))
            ->setBodyText(Translator::fromRegistry()->translate(ClientViewFieldsBuyNow::HOME_PAGE_BUY_NOW_DESCRIPTION))
            ->addScreenShot(ResourceServiceBuyNowHutkigrosh::getClientScr(1))
            ->addScreenShot(ResourceServiceBuyNowHutkigrosh::getClientScr(2))
            ->addScreenShot(ResourceServiceBuyNowHutkigrosh::getClientScr(3))
            ->addScreenShot(ResourceServiceBuyNowHutkigrosh::getClientScr(4));
    }
}