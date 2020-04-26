<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
?>
<div class="footer_fixed">


    <div class="yb_conct" style="right: -127px;">
        <div class="yb_bar">
            <ul>
                <li class="yb_top"><a id="customizedGoToTop" href="#customizedGoToTop"  style="color:#fff">返回顶部</a></li>
                <li class="yb_phone" style="display:none;">4008-123-456</li>
                <li class="yb_QQ">
                    <span style="position: relative; top:-10px;left:54px;">QQ咨询</span>
                    <span style="position: relative;top: 10px;left: -16px;"><?= explode("@", Yii::$service->email->contactsEmailAddress())[0]; ?></span>
<!--                    <address class="block contact-us-address-block">-->
<!--                        <div class="block-title">-->
<!--                            <h2>--><?//= Yii::$service->page->translate->__('Contacts'); ?><!--</h2>-->
<!--                        </div>-->
<!--                        <div class="block-content">-->
<!--                            <strong>--><?//= Yii::$service->page->translate->__('Email Address'); ?><!--:</strong>-->
<!--                            <a href="mailto:--><?//= Yii::$service->email->contactsEmailAddress(); ?><!--">--><?//= Yii::$service->email->contactsEmailAddress(); ?><!--</a>-->
<!--                            <br>-->
<!--                        </div>-->
<!--                    </address>-->
                </li>
                <li class="yb_ercode" style="height: 53px;">微信二维码 <br>
                    <?=  Yii::$service->cms->staticblock->getStoreContentByIdentify('scroll-contact-info','appfront') ?>
            </ul>
        </div>
    </div>

<!--	<a id="goTop" class="go_top" href="#gotop" style="display: block;">go to top</a>-->
<!--    --><?//=  Yii::$service->cms->staticblock->getStoreContentByIdentify('scroll-contact-info','appfront') ?>
<!--	<a class="cus_survey" href="--><?//= Yii::$service->url->getUrl('customer/contacts'); ?><!--" title="customer surveyasd阿伟发尾发我f" target="_blank">customer survey</a>-->
<!--	<div class="ph"><a id="goBottom" class="go_bottom" href="#gobottom" >go to bottom</a></div>-->
</div>