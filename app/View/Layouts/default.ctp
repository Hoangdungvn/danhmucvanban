<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Tra cứu thông tin văn bản');
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('VBPQmore');
    echo $this->Html->css('style2');
    echo $this->Html->css('datagrid');
    echo $this->Html->css('style-vbpq');
    echo $this->Html->css('style-btp');
    echo $this->Html->css('bootstrap.css');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div class="html">
    <div class="body">
        <div id="wapper">
            <!--Begin Header-->
            <div id="header">
                <div id="top-navigation">

                    <div id="ctl00_wpHienThiMenuTopNavigation2" __markuptype="vsattributemarkup"
                         __webpartid="{a0ae54e7-dc12-4280-8b61-92cb4f552390}" webpart="true">


                        <ul>
                            <li><a href="/Pages/site-map.aspx">Sơ đồ cổng thông tin</a></li>
                            <li><span>|</span></li>
                            <li>

                                <a href="https://red.moj.gov.vn/cas/login?service=http://moj.gov.vn/Pages/home.aspx">Đăng
                                    nhập</a>

                            </li>
                            <li><span>|</span></li>
                            <li><a href="/en">English</a></li>
                        </ul>

                    </div>


                </div>

                <div id="logo">

                    <!-- start logo-->
                    <?php echo $this->Html->image('Banner-Van banphap quy.jpg', array('alt' => 'Tra cứu văn bản pháp luật'))?>
                    <!-- end logo-->
                </div>
                <!-- start menu-->

                <div id="ctl00_g_1f5ee6bb_529b_4887_924b_ab97c514db7f" __markuptype="vsattributemarkup"
                     __webpartid="{1F5EE6BB-529B-4887-924B-AB97C514DB7F}" webpart="true" partorder="1">

                    <div id="menu">
                        <div class="menu-top">
                            <!-- top menu -->
                            <div class="left">
                                <ul>

                                    <li id="Menu_5"><a target="_top" href="http://moj.gov.vn">
                            <span>
                            Cổng thông tin điện tử
                            <!--[if gte IE 7]><!-->
                            </span>
                                        </a>
                                    </li>

                                    <li id="Menu_1"><a target="_top" href="/pages/vbpq.aspx">
                            <span>
                            Trang chủ
                            <!--[if gte IE 7]><!-->
                            </span>
                                        </a>
                                    </li>

                                    <li id="Menu_6"><a target="_top" href="/vbpq/Pages/ssearch.aspx">
                            <span>
                            Tìm kiếm
                            <!--[if gte IE 7]><!-->
                            </span>
                                        </a>
                                    </li>

                                    <li id="Menu_7"><a target="_blank" href="http://vbpl.vn/">
                            <span>
                            CSDLQG về văn bản pháp luật
                            <!--[if gte IE 7]><!-->
                            </span>
                                        </a>
                                    </li>

                                    <li id="Menu_4"><a target="_top" href="/vbpq/en">
                            <span>
                            English
                            <!--[if gte IE 7]><!-->
                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- top menu -->
                            <!-- top search -->
                        </div>
                        <!-- sub menu -->
                        <!-- sub menu -->
                    </div>

                </div>
            </div>

            <!--End Header -->

            <!--Begin Body -->
            <div id="content-c">
                <div id="content">
                    <div class="khung">
                        <div class="left">
                             <?php echo $this->element('left',array('left_menu'=>$left_menu)); ?>
                        </div>
                        <div class="main">
                             <?php echo $this->fetch('content') ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--End body -->

            <!--Begin Footer-->
            <div id="footer">
                <div class="footer-c">
                    <div class="footer-content" style="padding: 6px 15px">
                        <div class="info" style="clear:both;text-shadow: 0 0 0 #FFFFFF;">
                            <p style="border: 0 none;
                                font: inherit;
                                margin: 0;
                                padding: 10px 0 0;
                                font-size:14px;
                                font-weight:bold;
                                vertical-align: baseline;
                                ">
                                Tra cứu thông tin văn bản
                            </p>
                        </div>
                    </div>
                </div>

                <!--End Footer -->

            </div>
        </div>
    </div>
</div>
<!--	--><?php //echo $this->element('sql_dump'); ?>
</body>
</html>
