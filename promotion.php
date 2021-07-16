<?PHP
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
?>

<?php

if (!function_exists('base_url')) {
    function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf( $tmplt, $http, $hostname, $end );
        }
        else $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }

        return $base_url;
    }
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<!-- Stylesheets ============================================= -->
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>fonts/Sukhumvit/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>custom/index.css?v=11" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>style.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/colors.css" type="text/css" />

	<!-- Radio Checkbox Plugin -->
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/components/radio-checkbox.css" type="text/css" />

	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title ============================================= -->
	<title>GstarCAD - 8BAHT.COM</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta http-equiv="Content-Language" content="th">
	<meta name="author" content="GstartCAD - 8BAHT.COM" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

	<meta property="og:site_name" content="GstartCAD - 8BAHT.COM"/>
	<meta name="keywords" content="gstarcad,8baht,gstarcad ดาวน์โหลดฟรี,GstarCAD,GstarCAD download,gstarcad ทดลองใช้,GstarCAD ราคา">
	<meta name="description" content="โปรแกรมเขียนแบบที่มีประสิทธิภาพ ใช้งานเทียบเท่า ออโตแคด เป็น Licenseแบบถาวร GstarCAD จัดเก็บไฟล์เป็นนามสกุล .DWG แบบเดียวกัน ซึ่งสามารถเปิดไฟล์งานจาก AutoCAD (R14 ถึงรุ่นล่าสุด)...">
	<meta name="language" content="TH">
	<meta name="revisit-after" content="1 day" />
	<meta name='copyright' content='8BAHT.COM'>

	<!-- facebook -->
	<meta property="og:locale" content="TH" />
	<meta property="og:site_name" content="8BAHT.COM" />
	<meta property="og:type" content="article"/>

	<style>
		.content-wrap {
			position: relative;
			padding: 30px 0px;
		}
		.top-links {
			position: relative;
			float: right !important;
		}
		@media only screen and (max-width:419px)   {
			.content-wrap .header-stick {
				margin-top: -310px !important;
			}
		}
		@media only screen and (min-width:420px) and (max-width:575px)   {
			.content-wrap .header-stick {
				margin-top: -310px !important;
			}
		}
		@media only screen and (min-width:576px) and (max-width:767px)   {
			.content-wrap .header-stick {
				margin-top: -340px !important;
			}
		}
		@media only screen and (min-width:768px) and (max-width:991px)   {
			.content-wrap .header-stick {
				margin-top: -190px !important;
			}
		}
		@media only screen and (min-width:992px) and (max-width:1199px)   {
			.content-wrap .header-stick {
				margin-top: -170px !important;
			}
		}
		@media only screen and (min-width:1200px)  {
			.content-wrap .header-stick {
				margin-top: -200px !important;
			}
		}
	</style>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P9T492V');</script>
	<!-- End Google Tag Manager -->


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146171995-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-146171995-1');
	</script>
</head>

<body class="stretched">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9T492V"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">

		<div id="top-bar">

			<div class="clearfix">

				<div class="col_full" style="margin-bottom: 0px !important;">

					<div class="top-links">
						<ul>
							<li><a href="tel:+6627449397"><div><img class="icon-bar" src="<?PHP echo base_url(); ?>images/icons/call@3x.png" alt="Logo"></div></a></li>
							<li><a href="https://lin.ee/S9eyleh"><div><img class="icon-bar" src="<?PHP echo base_url(); ?>images/icons/btn-press@3x.png" alt="Logo"></div></a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
		<header id="header" class="transparent-header semi-transparent full-header">
			<div id="header-wrap">

				<div class="container-custom clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div id="logo">
						<a href="<?PHP echo base_url(); ?>" class="standard-logo" data-dark-logo="<?PHP echo base_url(); ?>images/logo/logo-gstar-cad-011.png"><img class="logo-web" src="<?PHP echo base_url(); ?>images/logo/logo-gstar-cad-011.png" alt="Logo"></a>
						<a href="<?PHP echo base_url(); ?>" class="retina-logo" data-dark-logo="<?PHP echo base_url(); ?>images/logo/logo-gstar-cad-011.png"><img class="logo-web" src="<?PHP echo base_url(); ?>images/logo/logo-gstar-cad-011.png" alt="Logo"></a>
					</div>
					<nav id="primary-menu">
						<ul>
							<li class="menu-des"><a href="tel:+6627449397"><div><img class="icon-bar" src="<?PHP echo base_url(); ?>images/icons/call@3x.png" alt="Logo"></div></a></li>
							<li class="menu-des"><a href="https://lin.ee/S9eyleh"><div><img class="icon-bar" src="<?PHP echo base_url(); ?>images/icons/btn-press@3x.png" alt="Logo"></div></a></li>
							<li><a href="#content-quotation"><div>ขอใบเสนอราคา</div></a></li>
							<li><a href="#content-detail-interface"><div>ทำไมควรเลือก GstarCAD</div></a></li>
							<li><a href="#conten-detail-q_and_a"><div>คำถามที่พบบ่อย</div></a></li>
							<li><a href="<?PHP echo base_url(); ?>promotion.php"><div>โปรโมชั่น</div></a></li>
						</ul>
					</nav>
					<div class="menu-mobile">
						<div class="grid-menu-mobile">
							<a href="tel:+6627449397"><div><img class="icon-bar" src="<?PHP echo base_url(); ?>images/icons/call@3x.png" alt="Logo"></div></a>
							<a href="https://lin.ee/S9eyleh"><div><img class="icon-bar" src="<?PHP echo base_url(); ?>images/icons/btn-press@3x.png" alt="Logo"></div></a>
						</div>
					</div>

				</div>

			</div>
		</header>

		<section id="slider" class="dark" style="background: url(images/bg/Mask-Group-4.png) center center / cover no-repeat; overflow: visible;" data-height-lg="1100" data-height-md="1000" data-height-sm="900" data-height-xs="1150" data-height-xxs="900">
			<div id="section-promotion" class="slider-parallax-inner">
				<div class="vertical-middle clearfix slider-content-pd">
					<div class="container-custom">
						<div style="max-width: 800px; margin:auto;">
							<div class="grid-slider-two" >
								<div class="display-flex">
									<div>
										<a href="#" data-scrollto="#content-detail-dowload" data-offset="100" >
											<img  src="<?PHP echo base_url(); ?>images/items/Group-8011.png" alt="Logo">
										</a>
									</div>
								</div>
								<div>
									<img src="<?PHP echo base_url(); ?>images/items/get1free1.png" alt="image-2">
								</div>
							</div>
						</div>
						<div style="max-width: 700px; margin:auto;">
							<div class="center">
								<img src="<?PHP echo base_url(); ?>images/items/Group-801.png" alt="image-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="content" style="overflow: visible;" >

			<div class="content-wrap">

				<div id="content-promo" class="promo promo-full landing-promo header-stick" style="background: url(images/bg/mechanical-icon200.png)center center / cover no-repeat; overflow: visible;" data-height-lg="560" data-height-md="560" data-height-sm="770" data-height-xs="1100" data-height-xxs="1180">
					<div class="container-custom clearfix promo-topmargin bottommargin">
						<div class="row">
							<div class="col-md-3 col-sm-6 title-center border-right-cda1 bottom-margin-mobile1">
								<img class="icon-item-promo" src="<?PHP echo base_url(); ?>images/items/save-money.png" alt="save-money" >
								<div class="promo-height-content">
									<br/>
									<div class="nobottommargin co-white">ลดค่าใช้จ่ายด้านซอฟต์แวร์ ไม่ต้องจ่ายรายปี ลิขสิทธิ์แบบซื้อขาด</div>
								</div>
								<h4 class="co-white">จ่ายครั้งเดียว</h4>
							</div>
							<div class="col-md-3 col-sm-6 title-center border-right-cda2 bottom-margin-mobile2">
								<img class="icon-item-promo" src="<?PHP echo base_url(); ?>images/items/flip.png" alt="flip" >
								<div class="promo-height-content">
									<br/>
									<div class="nobottommargin co-white">เพียง 15 นาทีเท่านั้น ที่คุณจะพบว่าคุณคุ้นเคยกับ GstarCAD เริ่มงานของคุณได้ทันที!</div>
								</div>
								<h4 class="co-white">เหมือน AutoCAD</h4>
							</div>
							<div class="col-md-3 col-sm-6 title-center border-right-cda3 bottom-margin-mobile3">
								<img class="icon-item-promo" src="<?PHP echo base_url(); ?>images/items/transfer.png" alt="transfer" >
								<div class="promo-height-content">
									<br/>
									<div class="nobottommargin co-white">เพิ่มความสะดวก ในการทำงานร่วมกันสามารถแลกเปลี่ยนไฟล์กับซอฟต์แวร์ CAD  ตัวอื่นๆ ได้ รวมถึง AutoCAD*</div>
								</div>
								<h4 class="co-white">รองรับไฟล์ AutoCAD</h4>
							</div>
							<div class="col-md-3 col-sm-6 title-center border-right-cda4 bottom-margin-mobile4">
								<img class="icon-item-promo" src="<?PHP echo base_url(); ?>images/items/technical-support.png" alt="technical-support" >
								<div class="promo-height-content">
									<br/>
									<div class="nobottommargin co-white">Technical Suport พร้อมช่วยเหลือ เมื่อเกิดปัญหาบริการ Onsite Service**</div>
								</div>
								<h4 class="co-white">ทีมผู้เชี่ยวชาญดูแล</h4>
							</div>
						</div>
					</div>
				</div>
				<div id="content-quotation">
					<div class="clearfix">
						<div class="content-padding ">
							<div class="container-custom ">
								<div class="heading-block center">
									<h2 class="center co-bule">GstarCAD โปรแกรมเขียนแบบ เพื่อธุรกิจของคุณ</h2>
								</div>
								<div class="center co-bule">
									GstarCAD คือ โปรแกรมเขียนแบบ 2D/3D เป็นซอฟแวร์ CAD ที่มีประสิทธิภาพ ทำงานได้รวดเร็วและมีฟังก์ชั่นครบครัน รองรับทุกสายงาน ไม่ว่าจะเป็นเขียนแบบบ้าน ชิ้นส่วนอุปกรณ์ แผนผัง รวมถึงเขียนแบบไฟฟ้าในราคาที่คุ้มค่า พร้อมทั้งฟังก์ชั่นการทำงานอีกมากมาย ที่ช่วยการทำงานของคุณเต็มประสิทธิภาพยิ่งขึ้น
								</div>
							</div>
							<div style="margin-top: 60px;">
								<div class="display-flex-column">
									<div class="center">
										<h3 class="center co-bule">ซื้อ GstarCAD กับเราพร้อมของแถมสุดพิเศษ</h3>
										<img style="width: 100%; max-width:300px" src="<?PHP echo base_url(); ?>images/items/quotation-free.png" alt="transfer" >
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div id="content-detail-interface">
					<div class="container-custom clearfix">
						<div class="content-padding">
							<h2 class="center co-bule">Interface และคำสั่งที่คุ้นเคย</h2>
							<div class="center co-bule">
								GstarCAD มีหน้าตาที่คล้ายกับ AutoCAD มี Interface ให้เลือกตามความเหมาะสมกับการใช้งาน ผู้ใช้สามารถสลับไปมาระหว่าง Ribbon interface และ Classic interface สำหรับผู้ที่ใช้งาน AutoCAD อยู่แล้ว สามารถสลับเปลี่ยนมาใช้งาน GstarCAD ได้ทันที โดยไม่ต้องเรียนรู้การใช้งานใหม่
							</div>
							<div class="center" style="margin-top:20px">
								<img style="max-width: 800px;width:100%" src="<?PHP echo base_url(); ?>images/items/45999-converted-01@3x.png" alt="content" />
							</div>
						</div>
					</div>
				</div>
				<div id="content-detail-lab">
					<div class="container-custom clearfix">
						<div class="content-padding">
							<h2 class="center co-bule">ทำงานร่วมกับผู้อื่นได้เหมือนเดิม</h2>
							<div class="center co-bule">
							ใช้แทน CAD ตัวเดิมของคุณได้ทันที รองรับไฟล์งาน ได้เหมือน AutoCAD (R14 ถึง รุ่นล่าสุด) ไม่จำเป็นต้องทำการแปลงไฟล์ก่อนเปิดใช้งาน โดย นำเข้า และส่งออกไฟล์ DWG, DXF and SCR (script) files 
							</div>
							<div class="center" style="margin-top:20px">
								<img style="max-width: 600px;width:100%" src="<?PHP echo base_url(); ?>images/items/vspic-07@3x.png" alt="content" />
							</div>
						</div>
					</div>
				</div>
				<div id="content-detail-tool" class="bg-gray">
					<div class="clearfix">
						<div class="content-padding-top-bottom">
							<div class="row">
								<div class="col-md-6 col-sm-6 center co-bule">
									<img style="width:100%" src="<?PHP echo base_url(); ?>images/items/cad2020-icon9.png" alt="content" />
								</div>
								<div class="col-md-6 col-sm-6">
									<button class="button button-circle btn-blue" style="font-size: 18px;">เครื่องมือเฉพาะ</button>
									<div style="padding-top: 30px; width:100%" class="co-bule" >
										คำสั่งเครื่องมือ<span class="co-fcc841">ที่มีเฉพาะใน GstarCAD เท่านั้น </span>กว่า 100 คำสั่งเมนู ที่ช่วยให้คุณทำงานได้เร็วยิ่งขึ้น เช่น "แสดงตารางพื้นที่" "เลเยอร์อัตโนมัติ" "วิวพอร์ตไปยังเค้าโครง"
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="content-detail-promotion">
					<div class="clearfix">
						<div class="content-padding">
							<div class="center" >
								<img style="width:100%; max-width: 600px;" src="<?PHP echo base_url(); ?>images/items/item-promo-head-spacial.png" alt="content" />
							</div>
							<div class="center">
								<a  href="https://lin.ee/S9eyleh" target="_bank" >
									<img style="width:100%;max-width: 400px;" src="<?PHP echo base_url(); ?>images/items/Plan-spacial.png" alt="plan" />
								</a>
							</div>
							<div class="center"><small>ราคานี้ยังไม่รวมภาษีมูลค่าเพิ่ม 7%  หากคุณมีข้อสงสัยใดๆ กรุณาติดต่อเรา</small></div>
							<br/>
							<div  style="max-width: 800px; margin:auto">
								<div class="grid-promotuon-codition">
									<div ><small>เงื่อนไขโปรโมชั่นลิขสิทธิ์ซื้อขาด</small></div>
									<div >
										<div class="grid-icon-condition">
											<div><span class="icon-condition"></span><small>ได้รับ SN จริง เมื่อชำระเงินครบถ้วน (ช่วงนี้ได้เป็น Temp SN)</small></div>
											<div><span class="icon-condition"></span><small>สั่งจ่ายเป็น PDC 60 วันนับจากวันที่ส่ง PO</small></div>
											<div><span class="icon-condition"></span><small>เงื่อนไขเป็นไปตามที่บริษัทกำหนดฯ</small></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="content-detail-cad">
					<div class="clearfix topmargin" style="background: url(images/items/1@3x.png)center center / cover no-repeat; overflow: visible;" >
						<div class="container-custom topmargin bottommargin title-center " id="section-where">
							<h2 class="co-bule">CAD ทางเลือก เหตุผลที่คุณต้องเป็นเจ้าของ</h2>
							<div class="row hd-img-11-res-desktop">
								<div class="col-md-4 col-sm-6 title-center">
									<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-01@3x.png" alt="icon" >
									<h4 class="nobottommargin">แทน CAD ตัวเดิมของคุณได้ทันที</h4>
									<div class="width-block-content-4">รูปแบบการทำงาน และ คำสั่งต่างๆ ใกล้เคียงกับ AutoCAD ไม่เสียเวลา และ ค่าใช้จ่ายในการเรียนรู้</div>
								</div>
								<div class="col-md-4 col-sm-6 title-center">
									<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-05@3x.png" alt="icon" >
									<h4 class="nobottommargin">ทำงานร่วมกับผู้อื่นได้เหมือนเดิม</h4>
									<div class="width-block-content-4">รองรับไฟล์งานเก่า จาก AutoCAD ไม่จำเป็นต้องทำการแปลงไฟล์ใดๆ ทั้งสิ้น สะดวกในการทำงานร่วมกับผู้อื่น</div>
								</div>
								<div class="col-md-4 col-sm-6 title-center">
									<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-03@3x.png" alt="icon" >
									<h4 class="nobottommargin">ช่วย ลดค่าใช้จ่าย</h4>
									<div class="width-block-content-4">เป็นซอฟต์แวร์ลิขสิทธิ์ ประเภทซื้อขาดจ่ายครั้งเดียวตลอดชีพ ไม่ต้องเสียรายปี</div>
								</div>
							</div>
							<div class="row hd-img-11-res-desktop">
								<div class="col-md-2 col-sm-2"></div>
								<div class="col-md-4 col-sm-4 title-center">
									<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-04@3x.png" alt="icon" >
									<h4 class="nobottommargin">รองรับขนาดไฟล์งานทุกระดับ</h4>
									<div class="width-block-content-4">สามารถทำงานได้กับไฟล์ทุกขนาดทำให้ไม่มีปัญหาหากต้องเปิดไฟล์ใหญ่</div>
								</div>
								<div class="col-md-4 col-sm-4 title-center">
									<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-02@3x.png" alt="icon" >
									<h4 class="nobottommargin">รองรับการทำงานหลายเครื่อง</h4>
									<div class="width-block-content-4">เหมาะสำหรับผู้ใช้งานหลายคน ในองค์กรขนาดใหญ่ (เฉพาะ license ประเภท Network*)</div>
								</div>
								<div class="col-md-2 col-sm-2"></div>
							</div>
							<div class="row hd-img-11-res-mobile">
								<div class="col-sm-12 title-center">
									<div id="hd-show-pid" style="display: block;">
										<div class="col-md-12 title-center">
											<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-01@3x.png" alt="icon" >
											<h4 class="nobottommargin">แทน CAD ตัวเดิมของคุณได้ทันที</h4>
											<div class="width-block-content-4">รูปแบบการทำงาน และ คำสั่งต่างๆ ใกล้เคียงกับ AutoCAD ไม่เสียเวลา และ ค่าใช้จ่ายในการเรียนรู้</div>
											<br/>
											<button onclick="clickHide()" class="co-bule button-hd-psi"><img style="width:10px; height: 10px;" class="img-12-d" src="<?PHP echo base_url(); ?>images/items/plus-circle.png" alt="icon" > ดูเพิ่มเติม</button>
										</div>
									</div>
									<div id="hd-show-pid-w" style="display: none;">
										<div class="col-md-12 title-center">
											<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-01@3x.png" alt="icon" >
											<h4 class="nobottommargin">แทน CAD ตัวเดิมของคุณได้ทันที</h4>
											<div class="width-block-content-4">รูปแบบการทำงาน และ คำสั่งต่างๆ ใกล้เคียงกับ AutoCAD ไม่เสียเวลา และ ค่าใช้จ่ายในการเรียนรู้</div>
										</div>
										<div class="col-md-12 title-center">
											<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-05@3x.png" alt="icon" >
											<h4 class="nobottommargin">ทำงานร่วมกับผู้อื่นได้เหมือนเดิม</h4>
											<div class="width-block-content-4">รองรับไฟล์งานเก่า จาก AutoCAD ไม่จำเป็นต้องทำการแปลงไฟล์ใดๆ ทั้งสิ้น สะดวกในการทำงานร่วมกับผู้อื่น</div>
										</div>
										<div class="col-md-12 title-center">
											<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-03@3x.png" alt="icon" >
											<h4 class="nobottommargin">ช่วย ลดค่าใช้จ่าย</h4>
											<div class="width-block-content-4">เป็นซอฟต์แวร์ลิขสิทธิ์ ประเภทซื้อขาดจ่ายครั้งเดียวตลอดชีพ ไม่ต้องเสียรายปี</div>
										</div>
										<div class="col-md-12 title-center">
											<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-04@3x.png" alt="icon" >
											<h4 class="nobottommargin">รองรับขนาดไฟล์งานทุกระดับ</h4>
											<div class="width-block-content-4">สามารถทำงานได้กับไฟล์ทุกขนาดทำให้ไม่มีปัญหาหากต้องเปิดไฟล์ใหญ่</div>
										</div>
										<div class="col-md-12title-center">
											<img class="img-12-d" src="<?PHP echo base_url(); ?>images/items/icon-02@3x.png" alt="icon" >
											<h4 class="nobottommargin">รองรับการทำงานหลายเครื่อง</h4>
											<div class="width-block-content-4">เหมาะสำหรับผู้ใช้งานหลายคน ในองค์กรขนาดใหญ่ (เฉพาะ license ประเภท Network*)</div>
										</div>
										<br/>
										<button onclick="clickHide()" class="co-bule button-hd-psi"> <i class="icon-angle-up"></i> ปิด</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="content-oc" >
					<div class="container-custom ">
						<h2 class="center">ตัวอย่างบริษัทต่างๆ ที่ได้นำ GstarCAD ไปใช้งาน ↓</h2>
						<div style="max-width: 800px; margin:auto;" id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">
							<div class="oc-item">
								<div class="iportfolio">
									<div class="portfolio-desc center nobottompadding">
										« ทีมเราใช้ GstarCAD อยู่ในช่วงของการเตรียมแบบสำหรับการก่อสร้างพื้นโพสเทนชั่น เราต้องมีแบบรายละเอียด ประกอบก่อนว่าพื้นมีความหนาเท่าไหร่ วัสดุที่ใช้มีอะไร จำนวนเท่าไร จะต้องอยู่ตำแหน่งตรงไหนของแบบรายละเอียด GstarCAD จะเข้ามาช่วยในเรื่องของการสร้างรายละเอียดของแบบเหล่านี้ และส่งข้อมูลต่อไปยังโรงงานและอีกส่วนหนึ่งจะถูกส่งไปที่หน้างานเพื่อใช้ในการประกอบติดตั้ง »
										<br/><br/>
										<span>บริษัทผลิตภัณฑ์และวัตถุก่อสร้าง จำกัด (CPAC) ในเครือซิเมนต์ไทย</span>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="iportfolio">
									<div class="portfolio-desc center nobottompadding">
										« เหตุที่ใช้ GstarCAD เพราะเป็นซอฟท์แวร์ลิขสิทธิ์ราคาประหยัด จึงทำให้ต้นทุนเราไม่สูง และผู้ใช้งานเราก็บอกเลยว่าใช้งานง่าย หากแค่พอมีพื้นฐานอยู่ก็สามารถใช้งานได้เลย ไม่ยุ่งยากอะไร สามารถเอาไปประยุกต์ใช้กับงานแต่ละส่วนที่เค้าใช้งานได้ เรียกได้ว่าคุณภาพคับแก้วราคาโดนใจครับ »
										<br/><br/>
										<span>คุณภูษิต เดชะกุล ผู้จัดการโรงงาน บริษัท Summa N.K. Contracting</span>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="iportfolio">
									<div class="portfolio-desc center nobottompadding">
										« จากเท่าที่สัมผัสมาก็พึงพอใจมาก คือทั้ง 2D และ 3D GstarCAD รองรับได้หมดเลย ถ้าเป็น CAD ตัวอื่น ไฟล์ที่เป็น 3D ก็ต้องซื้อ 3D มาใช้ แต่ GstarCAD ไม่ต้อง แล้วฟังก์ชั่นในการทำงานต่างๆ สามารถรองรับไฟล์ CAD อื่นได้ »
										<br/><br/>
										<span>คุณกิติชัย วิจิตรสุขุม หัวหน้าฝ่ายงานออกแบบ บริษัท SECOM</span>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="iportfolio">
									<div class="portfolio-desc center nobottompadding">
										« “We are Professional in Construction” เราเน้นย้ำการใช้ซอฟต์แวร์ลิขสิทธิ์ทั้งหมด 100 % ข้อดีมันต้องมีอยู่แล้ว คือเราจะทำงานด้วยความสบายใจขึ้นเยอะ ไม่ต้องมาพะวง ระแวดระวังเรื่องจะมีคนเข้ามาตรวจจับอะไรแบบนี้ ตัดปัญหาตรงนี้ไปเลย »
										<br/><br/>
										<span>คุณฐานะ IT Manager บริษัท สยาม มัลติ คอน จำกัด</span>
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="iportfolio">
									<div class="portfolio-desc center nobottompadding">
										« กระบวนการเลือกง่ายๆ เราเลือกซอฟต์แวร์ CAD ที่ให้ทดลองใช้ในท้องตลาด นำแต่ละตัวมาติดตั้ง เพื่อทดสอบดูว่า CAD ตัวไหนสามารถรองรับการทำงานของเราได้ดีที่สุด ซึ่ง GstarCAD เป็นตัวเดียวที่สามารถทำตามคำสั่งของเราได้ครบทุกคำสั่ง โดยที่ไม่มี Error ครับ »
										<br/><br/>
										<span>บริษัท ซี-โพส จำกัด โดยทีมงานวิศวกร</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="conten-detail-ex">
					<div class="container-custom ">
						<h2 class="center">ภาพตัวอย่างโปรแกรม</h2>
						<div class="boxed-slider">
							<div class="clearfix">

								<div class="fslider" data-easing="easeInQuad">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide" data-thumb="<?PHP echo base_url(); ?>images/slider/Rapid Dist-1.png">
												<img src="<?PHP echo base_url(); ?>images/slider/Rapid Dist-1.png" alt="Rapid Dist">
											</div>
											<div class="slide" data-thumb="<?PHP echo base_url(); ?>images/slider/GstarCAD 3D Pipe.png">
												<img src="<?PHP echo base_url(); ?>images/slider/GstarCAD 3D Pipe.png" alt="GstarCAD 3D Pipe">
											</div>
											<div class="slide" data-thumb="<?PHP echo base_url(); ?>images/slider/3D Model 6.png">
												<img src="<?PHP echo base_url(); ?>images/slider/3D Model 6.png" alt="3D Model">
											</div>
											<div class="slide" data-thumb="<?PHP echo base_url(); ?>images/slider/3D Model 5.png">
												<img src="<?PHP echo base_url(); ?>images/slider/3D Model 5.png" alt="3D Model">
											</div>
											<div class="slide" data-thumb="<?PHP echo base_url(); ?>images/slider/3D Mash.png">
												<img src="<?PHP echo base_url(); ?>images/slider/3D Mash.png" alt="3D Mash">
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div id="conten-detail-q_and_a">
					<div class="container-custom">
						<h2 class="center">GstarCAD คำถามที่พบบ่อย</h2>
						<div class="clearfix">

							<div class="accordion clearfix" data-state="closed">

								<div class="acctitle"><i class="acc-closed icon-plus"></i><i class="acc-open icon-minus"></i>GstarCAD สิทธิ์ใช้ได้กี่เครื่อง</div>
								<div class="acc_content clearfix">1 License ใช้งานได้ 1 เครื่อง หากมีการใช้งานหลายเครื่อง ทางเราขอแนะนำ แบบเครือข่าย (Network License)</div>

								<div class="acctitle"><i class="acc-closed icon-plus"></i><i class="acc-open icon-minus"></i>สามารถอัพเดทเมื่อมีเวอร์ชั่นใหม่ได้หรือไม่</div>
								<div class="acc_content clearfix">สามารถอัพเกรด เมื่อมีเวอร์ชั่นใหม่ได้ฟรี 1 ปี  โปรแกรมจะมีการอัพเกรดเวอร์ชั่นใหม่ 3-4 ปี</div>

								<div class="acctitle"><i class="acc-closed icon-plus"></i><i class="acc-open icon-minus"></i>รองรับไฟล์อะไรบ้าง</div>
								<div class="acc_content clearfix">นำเข้า และส่งออกไฟล์ DWG, DXF and SCR (script) files ได้เหมือน AutoCAD ทำงานร่วมกับผู้อื่นได้เหมือนเดิม</div>

								<div class="acctitle" style="border-bottom: 1px solid #ccc !important;"><i class="acc-closed icon-plus"></i><i class="acc-open icon-minus"></i>มีเจ้าหน้าที่่ซัพพอร์ตหลังการขายหรือไม่</div>
								<div class="acc_content clearfix">มีบริการหลังการขาย ด้วยเจ้าหน้าที่ผู้เชี่ยวชาญกว่า 250 คน  ด้วยทีมงานของ บจก. แอพพลิแคด เปิดดำเนินการตั้งแต่ปี พศ. 2537 จะช่วยดูแลคุณอย่างดีที่สุด</div>

							</div>
						</div>
					</div>
				</div>
				<div id="content-detail-dowload" class="center">
					<a href="https://8baht.com/gstarcad/demo.php" target="_bank">
						<button class="button button-desc button-border button-rounded center">ดาวน์โหลดและทดลองใช้ฟรี 30 วัน</button>
					</a>
					<br/>
					<small>ทดลองใช้ทุกฟีเจอร์ฟรี ไม่ต้องใช้บัตรเครดิต ไม่มีข้อผูกมัด</small>
				</div>
				<div id="content-detail-recommend">
					<div class="recommend-des">
						<div  class="bg-blue">
							<div class="container-custom" style="padding-top: 2rem; padding-bottom: 2rem" style="position: relative;">
								<div class="grid-recommend">
									<div>
										<h2 style="margin-bottom:0px" class="co-white">ต้องการคำแนะนำ<br/>ติดต่อเจ้าหน้าที่ของเรา</h2>
									</div>
									<div>
										<a href="https://lin.ee/S9eyleh" target="_bank">
											<img style="max-width: 300px;" src="<?PHP echo base_url(); ?>images/icons/logo-01@3x.png" alt="add line">
										</a>
									</div>
									<div style="position: relative;">
										<img class="item-img-contact" src="<?PHP echo base_url(); ?>images/items/artwork-3@3x.png" alt="add line">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="recommend-mobile">
						<div  style="position: relative;">
							<div class="container-custom" style="margin-bottom: 20px;" >
								<h3 style="margin-bottom:0px" class="co-bule">ต้องการคำแนะนำ<br/>ติดต่อเจ้าหน้าที่ของเรา</h3>
							</div>
							<div class="bg-blue">
								<div class="container-custom" style="padding-top: 2rem; padding-bottom: 2rem" >
									<div class="grid-recommend-mobile">
										<div>
											<a href="https://lin.ee/S9eyleh" target="_bank">
												<img style="max-width: 230px;" src="<?PHP echo base_url(); ?>images/icons/logo-01@3x.png" alt="add line">
											</a>
										</div>
										<div style="position: relative;">
											<img class="item-img-contact" src="<?PHP echo base_url(); ?>images/items/artwork-3@3x.png" alt="add line">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="content-detail-footer">
					<div class="container-custom center">
						<div class="line"></div>
						<small >© สงวนลิขสิทธิ์ 2021 บริษัท แอพพลิแคด จำกัด (มหาชน)</small>
					</div>
				</div>

			</div>

		</section>

	</div>
	<!-- #wrapper end -->
	<!-- Go To Top ============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts ============================================= -->
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/plugins.js"></script>

	<!-- Footer Scripts ============================================= -->
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/functions.js"></script>

	<script>
		function clickHide() {

			var company = document.getElementById("hd-show-pid");
			var company2 = document.getElementById("hd-show-pid-w");

			if(company != null){
				if (company.style.display === "block") {
					company.style.display = "none";
					company2.style.display = "block";
				} else {
					company.style.display = "block";
					company2.style.display = "none";
				}
			}

		}
	</script>

</body>
</html>