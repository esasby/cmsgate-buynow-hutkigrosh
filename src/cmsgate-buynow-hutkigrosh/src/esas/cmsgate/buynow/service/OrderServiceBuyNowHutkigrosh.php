<?php


namespace esas\cmsgate\buynow\service;


use DateTime;
use esas\cmsgate\hutkigrosh\wrappers\ConfigWrapperHutkigrosh;

class OrderServiceBuyNowHutkigrosh extends OrderServiceBuyNow
{
    /**
     * @inheritDoc
     */
    public function getOrderExpirationDate() {
        return $date = (new DateTime('NOW'))->modify('+' . ConfigWrapperHutkigrosh::fromRegistry()->getDueInterval() . ' day');
    }
}