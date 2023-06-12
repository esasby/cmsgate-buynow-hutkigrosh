<?php
namespace esas\cmsgate\buynow;


use esas\cmsgate\hutkigrosh\ConfigFieldsHutkigrosh;

class ConfigStorageBuyNowHutkigrosh extends ConfigStorageBuyNow
{

    public function getConfigFieldLogin() {
        return ConfigFieldsHutkigrosh::login();
    }

    public function getConfigFieldPassword() {
        return ConfigFieldsHutkigrosh::password();
    }
}