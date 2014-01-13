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

    echo $this->Html->script('jquery.js');
    echo $this->Html->script('jquery.ui/jquery-ui.js');
    echo $this->Html->script('jquery.fileDownload.js');

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
                            <?php echo $this->element('left', array('left_menu' => $left_menu)); ?>
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
                    <div class="footer-content" style="padding: 6px 15px;">
                        <!--
                        <p class="title" style="padding:0px;margin-top:0px;">CỔNG THÔNG TIN ĐIỆN TỬ BỘ TƯ PHÁP
                        </p>
                        -->
                        <div style="float:left;margin-top:3px;margin-right:80px;color:#035DCF;">
                            <a href="/"
                               style="color:white;font-weight:bold;font-style:normal;font-variant:normal;font-family:Verdana, Geneva, sans-serif;">Bộ
                                Tư pháp </a>&nbsp;&nbsp;&nbsp;<a
                                style="color:white;font-weight:bold;font-style:normal;font-variant:normal;font-family:Verdana, Geneva, sans-serif;"
                                href="/pages/contact.aspx">Liên hệ</a>&nbsp;&nbsp;&nbsp;
                            <a href="/Pages/guiphanhoi.aspx"
                               style="color:white;font-weight:bold;font-style:normal;font-variant:normal;font-family:Verdana, Geneva, sans-serif;">Phản
                                hồi</a>

                        </div>

                        <div class="info" style="clear:both;text-shadow: 0 0 0 #FFFFFF;">
                            <p style="border: 0 none;font: inherit;margin: 0;padding: 10px 0 0;font-size:14px;font-weight:bold;vertical-align: baseline;">
                                CỔNG THÔNG TIN ĐIỆN TỬ BỘ TƯ PHÁP
                            </p>

                            <p style="padding:5px 0px !important;line-height:100% !important;border: 0 none;font: inherit;margin: 0;padding: 0;vertical-align: baseline;"><strong>Địa chỉ:</strong> 60 Trần Phú, Ba Đình, Hà Nội. <strong>Điện thoại:</strong> 04.62739718 -<strong>Fax:</strong> 04.62739359. <strong>Email:</strong> banbientap@moj.gov.vn;cntt@moj.gov.vn.</p>

                            <p style="line-height:100% !important;border: 0 none;font: inherit;margin: 0;padding: 0;vertical-align: baseline;">Giấy phép cung cấp thông tin trên internet số 28/GP-BC ngày 25/03/2005.</p>

                            <p style="line-height:100% !important;border: 0 none;font: inherit;margin: 0;padding: 4px 0px;vertical-align: baseline; ">Trưởng Ban biên tập: Nguyễn Tiến Dũng - Cục trưởng Cục Công nghệ thông tin.</p>

                            <p style="line-height:100% !important;border: 0 none;
    font: inherit;
    margin: 0;
padding: 0px;
    vertical-align: baseline;
">Ghi rõ nguồn Cổng thông tin điện tử Bộ Tư pháp (www.moj.gov.vn) khi trích dẫn lại tin từ địa chỉ này. </p>
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
