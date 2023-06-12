<?php

use esas\cmsgate\bridge\dao\OrderStatusBridge;
use esas\cmsgate\buynow\messenger\MessagesBuyNow;
use esas\cmsgate\buynow\protocol\RequestParamsBuyNow;
use esas\cmsgate\buynow\view\admin\AdminViewFieldsBuyNow;
use esas\cmsgate\buynow\view\client\ClientViewFieldsBuyNow;

return array(
    ClientViewFieldsBuyNow::HOME_PAGE_HEADER => 'BuyNow Epos',
    ClientViewFieldsBuyNow::HOME_PAGE_HEADER_DETAILS => 'Accept QR-payments simply',
    ClientViewFieldsBuyNow::HOME_PAGE_BUY_NOW_DESCRIPTION => '<p><strong>BuyNow EPOS</strong> - simple integration for Your site with EPOS payment system!</p>
<ul>
<li>No need for moving to e-commerce CMS systems</li> 
<li>Can be used for selling with social networks</li>
</ul> 
<p>BuyNow EPOS gives You possibility to generate unique link, which can be add everywhere on You site</p>',
);