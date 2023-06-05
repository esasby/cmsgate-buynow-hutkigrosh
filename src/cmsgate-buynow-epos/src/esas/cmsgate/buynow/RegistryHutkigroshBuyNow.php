<?php

namespace esas\cmsgate\buynow;

use esas\cmsgate\bridge\service\OrderService;
use esas\cmsgate\buynow\hro\AdminLoginPageHROTunerBynowHutkigrosh;
use esas\cmsgate\buynow\service\OrderServiceBuyNowHutkigrosh;
use esas\cmsgate\buynow\service\ServiceProviderBuyNow;
use esas\cmsgate\buynow\view\admin\ConfigFormBuyNow;use esas\cmsgate\descriptors\ModuleDescriptor;
use esas\cmsgate\descriptors\VendorDescriptor;
use esas\cmsgate\descriptors\VersionDescriptor;
use esas\cmsgate\hutkigrosh\ConfigFieldsHutkigrosh;
use esas\cmsgate\hutkigrosh\hro\client\CompletionPanelHutkigroshHRO;
use esas\cmsgate\hutkigrosh\hro\client\CompletionPanelHutkigroshHRO_v2;
use esas\cmsgate\hutkigrosh\hro\sections\FooterSectionCompanyInfoHROTunerHutkigrosh;
use esas\cmsgate\hutkigrosh\hro\sections\HeaderSectionLogoContactsHROTunerHutkigrosh;
use esas\cmsgate\hro\HROManager;
use esas\cmsgate\hro\pages\AdminLoginPageHRO;
use esas\cmsgate\hro\sections\FooterSectionCompanyInfoHRO;
use esas\cmsgate\hro\sections\HeaderSectionLogoContactsHRO;
use esas\cmsgate\hutkigrosh\PaysystemConnectorHutkigrosh;
use esas\cmsgate\hutkigrosh\RegistryHutkigrosh;
use esas\cmsgate\utils\CMSGateException;
use esas\cmsgate\utils\URLUtils;
use esas\cmsgate\view\admin\AdminViewFields;

class RegistryHutkigroshBuyNow extends RegistryHutkigrosh
{
    public function __construct()
    {
        $this->cmsConnector = new CmsConnectorByNow();
        $this->paysystemConnector = new PaysystemConnectorHutkigrosh();
    }

    /**
     * Переопределение для упрощения типизации
     * @return RegistryHutkigroshBuyNow
     */
    public static function getRegistry()
    {
        return parent::getRegistry();
    }

    public function init() {
        parent::init();

        $this->registerServicesFromProvider(new ServiceProviderBuyNow());
        $this->registerService(OrderService::class, new OrderServiceBuyNowHutkigrosh());

        HROManager::fromRegistry()->addImplementation(CompletionPanelHutkigroshHRO::class, CompletionPanelHutkigroshHRO_v2::class);
        HROManager::fromRegistry()->addTuner(AdminLoginPageHRO::class, AdminLoginPageHROTunerBynowHutkigrosh::class);
        HROManager::fromRegistry()->addTuner(FooterSectionCompanyInfoHRO::class, FooterSectionCompanyInfoHROTunerHutkigrosh::class);
        HROManager::fromRegistry()->addTuner(HeaderSectionLogoContactsHRO::class, HeaderSectionLogoContactsHROTunerHutkigrosh::class);
    }


    /**
     * @throws \Exception
     */
    public function createConfigForm()
    {
        $managedFields = $this->getManagedFieldsFactory()->getManagedFieldsOnly(AdminViewFields::CONFIG_FORM_COMMON, [
            ConfigFieldsHutkigrosh::eripId(),
            ConfigFieldsHutkigrosh::eripPath(),
            ConfigFieldsHutkigrosh::eripTreeId(),
            ConfigFieldsHutkigrosh::dueInterval(),
//            ConfigFieldsHutkigrosh::sandbox(), //buynow is working in single mode
            ConfigFieldsHutkigrosh::completionText(),
            ConfigFieldsHutkigrosh::instructionsSection(),
            ConfigFieldsHutkigrosh::qrcodeSection(),
            ConfigFieldsHutkigrosh::webpaySection(),
        ]);
        $configForm = new ConfigFormBuyNow(
            $managedFields
        );
        return $configForm;
    }


    function getUrlWebpay($orderWrapper)
    {
        return URLUtils::getCurrentURLNoParams();
    }

    public function createModuleDescriptor()
    {
        return new ModuleDescriptor(
            "cmsgate-buynow-hutkigrosh",
            new VersionDescriptor("2.0.0", "2022-06-05"),
            "BuyNow Hutkigrosh",
            "https://github.com/esasby/cmsgate-buynow-hutkigrosh/",
            VendorDescriptor::esas(),
            "Выставление пользовательских счетов в ЕРИП"
        );
    }

    public function createConfigStorage()
    {
        return new ConfigStorageBuyNowHutkigrosh();
    }

    public function createProperties() {
        return new PropertiesBuyNowHutkigrosh();
    }

    function getUrlAlfaclick($orderWrapper) {
        throw new CMSGateException("Not implemented");
    }
}