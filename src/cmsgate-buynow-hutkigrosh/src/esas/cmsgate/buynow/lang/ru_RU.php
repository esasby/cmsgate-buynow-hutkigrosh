<?php

use esas\cmsgate\bridge\dao\OrderStatusBridge;
use esas\cmsgate\buynow\messenger\MessagesBuyNow;
use esas\cmsgate\buynow\protocol\RequestParamsBuyNow;
use esas\cmsgate\buynow\view\admin\AdminViewFieldsBuyNow;
use esas\cmsgate\buynow\view\client\ClientViewFieldsBuyNow;

return array(
    ClientViewFieldsBuyNow::HOME_PAGE_HEADER => 'BuyNow Hutkigrosh',
    ClientViewFieldsBuyNow::HOME_PAGE_HEADER_DETAILS => 'Принимайте платежи через ЕРИП',
    ClientViewFieldsBuyNow::HOME_PAGE_BUY_NOW_DESCRIPTION => '<p><strong>BuyNow Hutkigrosh</strong> - простая интеграция Вашего сайта с платежной системой ХуткіГрош!</p>
<ul>
<li>Нет необходимости перехода на CMS системы с модулями электронной коммерции.</li> 
<li>Подходит для создания заказов со страниц социальных сетях</li>
</ul> 
<p>BuyNow Hutkigrosh позволят самостоятельно сгенерировать <strong>уникальную ссылку</strong> для оплаты Вашего товара (или группы товаров). Данную ссылку, в виде кнопки, необходимо просто добавить на сайт (страницу) с описанием товара или услуги. </p><p>При нажатии на ссылку клиент будет перенаправлен в корзину с товарами, где закончит оформление заказа и сможет выполнить его оплату. Платежная ссылка также может быть отправлена менеджером клиенту любым удобным способом (по email или в мессенджеры)</p><br/>',
);