<?php


namespace esas\cmsgate\buynow\service;


use esas\cmsgate\hutkigrosh\controllers\ControllerHutkigroshAddBill;
use esas\cmsgate\hutkigrosh\controllers\ControllerHutkigroshCompletionPanel;
use esas\cmsgate\hutkigrosh\hro\client\CompletionPanelHutkigroshHRO;
use esas\cmsgate\wrappers\OrderWrapper;

class HooksBuyNowHutkigrosh extends HooksBuyNow
{
    public function onOrderDisplay($orderWrapper, &$completionPageBuilder) {
        if ($orderWrapper->getExtId() == null || $orderWrapper->getExtId() == '') {
            $controller = new ControllerHutkigroshAddBill();
            $controller->process($orderWrapper);
        }
        $controller = new ControllerHutkigroshCompletionPanel();
        $completionPanel = $controller->process($orderWrapper);
        $completionPageBuilder->setElementCompletionPanel($completionPanel->build());
    }
}