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


	<!-- Stylesheets
	============================================= -->
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>fonts/Sukhumvit/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>custom/index.css?v=10" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>style.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/components/radio-checkbox.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/colors.css" type="text/css" />

	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>GstarCAD Download- 8BAHT.COM</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta http-equiv="Content-Language" content="th">
	<meta name="author" content="GstarCAD - 8BAHT.COM" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

	<meta name="keywords" content="gstarcad,8baht,gstarcad ดาวน์โหลดฟรี,GstarCAD,GstarCAD download,gstarcad ทดลองใช้,GstarCAD ราคา">
	<meta name="description" content="GstarCAD คือซอฟต์แวร์เขียนแบบ 2D/3D นิยมใช้ในงานเขียนแบบก่อสร้าง หรืองานวิศวกรรม เป็น CAD ทางเลือกที่มีฟังก์ชั่นการใช้งาน และ Interface ที่เหมือนกับ AutoCAD เพียง 15 นาที จะพบว่าคุณคุ้นเคยกับโปรแกรมตัวนี้">
	<meta name="language" content="TH">
	<meta name="revisit-after" content="1 day" />
	<meta name='copyright' content='8BAHT.COM'>

	<meta property="og:site_name" content="GstarCAD - 8BAHT.COM"/>
	<meta property="og:og:locale" content="th-TH"/>

	<!-- facebook -->
	<meta property="og:url" content="<?PHP echo base_url(); ?>demo.php"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="Download GstarCAD For Windows" />
	<meta property="og:description" content="GstarCAD คือซอฟต์แวร์เขียนแบบ 2D/3D นิยมใช้ในงานเขียนแบบก่อสร้าง หรืองานวิศวกรรม เป็น CAD ทางเลือกที่มีฟังก์ชั่นการใช้งาน และ Interface ที่เหมือนกับ AutoCAD เพียง 15 นาที จะพบว่าคุณคุ้นเคยกับโปรแกรมตัวนี้" />
	<meta property="og:image" content="<?PHP echo base_url(); ?>images/GstarCAD product.png" />
	
	<style>
		#copyrights {
			padding: 10px 0 !important;
			background-color: #DDD;
			font-size: 14px;
			line-height: 1.8;
		}
		#footer {
			position: relative;
			background-color: #EEE;
			border-top: none !important;
		}
		.stretched #gotoTop {
			bottom: 80px;
		}
		#header.transparent-header {
			background-color: #f8f8f8 !important;
		}
		@media only screen and (max-width: 419px){
			h2 {
				font-size: 22px;
			}
		}
		@media only screen and (min-width:320px) and (max-width: 419px){
			.container {
				width: 300px !important;
			}
		}
		@media only screen and (min-width:420px) and (max-width: 575px){
			.container {
				width: 400px !important;
			}
		}
	</style>
</head>

<body class="stretched">

	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header ============================================= -->
		<header id="header" class="transparent-header">

			<div id="header-wrap" >

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?PHP echo base_url(); ?>" class="standard-logo" ><img class="logo-web lazy" data-src="<?PHP echo base_url(); ?>images/logo/logo-gstar-cad-011.png" alt="logo-8baht" ></a>
						<a href="<?PHP echo base_url(); ?>" class="retina-logo" ><img class="logo-web lazy" data-src="<?PHP echo base_url(); ?>images/logo/logo-gstar-cad-011.png" alt="logo-8baht" ></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="https://8baht.com/product/gstarcad/"><div>แพ็กเกจและราคา</div></a></li>
							<li><a href="<?PHP echo base_url(); ?>"><div>ขอใบเสนอราคา</div></a></li>
							<li><a href="https://lin.ee/S9eyleh" target="_bank"><div>ติดต่อแอดมิน</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header>
		
		<!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" style="padding-bottom:0px">
				<div class="container clearfix">
					<div class="si-sticky visible-md visible-lg">
						<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.8baht.com%2Fgstarcad%2Fdemo.php&amp;src=sdkpreparse" class="social-icon si-facebook" data-animate="bounceInLeft">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="https://social-plugins.line.me/lineit/share?url=https%3a%2f%2f8baht.com%2fgstarcad%2fdemo.php" class="social-icon si-ebay" data-animate="bounceInLeft" data-delay="400">
							<i class=""><img class="lazy icon-contact-social" src="images/icons/line.png" alt="email" ></i>
							<i class=""><img class="lazy icon-contact-social" src="images/icons/Line-Icon-b.png" alt="email" ></i>
						</a>
						<a href="mailto:arada@applicadthai.com;amnaj@applicadthai.com" class="social-icon si-email3" data-animate="bounceInLeft" data-delay="500">
							<i class="icon-email3"></i>
							<i class="icon-email3"></i>
						</a>
					</div>
				</div>
				<div class="container clearfix">
					<div class="row">
						<div class="col-md-6">
							<img class="lazy" src="<?PHP echo base_url(); ?>images/items/GstarCAD product.png" />
						</div>
						<div class="col-md-6">
							<h2>GstarCAD For Windows <img class="lazy" src="<?PHP echo base_url(); ?>images/icons/window icon.png" style="max-width: 40px;" /></h2>
							<div class="co-0a f-main">
								<b>GstarCAD</b> คือซอฟต์แวร์เขียนแบบ 2D/3D นิยมใช้ในงานเขียนแบบก่อสร้าง หรืองานวิศวกรรม เป็น CAD ทางเลือกที่มีฟังก์ชั่นการใช้งาน และ Interface ที่เหมือนกับ AutoCAD เพียง 15 นาที จะพบว่าคุณคุ้นเคยกับโปรแกรมตัวนี้ 
							</div>
							<div class="co-0a f-submain mg-top-20 mg-bottom-20" style="margin-left: 30px; margin-top:20px">
								<ul>
									<li>รองรับไฟล์ DWG ใช้แทน CAD ตัวเดิมของคุณได้ทันที </li>
									<li>รองรับขนาดไฟล์งานทุกระดับ</li>
									<li>รองรับระบบบล็อค เลเยอร์ external reference</li>
									<li>ฟีเจอร์ต่างๆ อีกมากมาย ทดลองใช้ได้เลย</li>
								</ul>
							</div>
							<div class="title-center one-page-menu">
								<a href="#" data-href="#section-dowloads">
									<img src="<?PHP echo base_url(); ?>images/dowload/button-click.png" class="lazy" style="max-width: 313px; width:100%"  >
								</a>
							</div>
						</div>
					</div>

				</div>
				<div class="section" style="margin-bottom: 0px; padding-bottom:0px">
					<div class="container clearfix">
						<div id="section-dowloads"  class="col_full title-center mg-top-50 mg-bottom-50">
							<h2>กรอกฟอร์มเพื่อดาวน์โหลด โปรแกรม GstarCAD</h2>
							<form method="post" action="/register/do.php">
								<div class="row"  style="margin:auto;max-width:620px">
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control" placeholder="ชื่อ" id="firstname" name="firstname" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control" placeholder="สกุล" id="lastname" name="lastname" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="อีเมล์ (สำหรับส่งลิงค์ดาวน์โหลด) *" id="email" name="email" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="form-control" id="designation" name="designation" required>
												<option value="">กรุณาเลือกอาชีพ</option>
												<option value="วิศวกร">วิศวกร</option>
												<option value="สถาปนิก">สถาปนิก</option>
												<option value="ช่างเขียนแบบ">ช่างเขียนแบบ</option>
												<option value="วิจัยและพัฒนา">วิจัยและพัฒนา</option>
												<option value="โฟร์แมนควบคุมงานก่อสร้าง">โฟร์แมนควบคุมงานก่อสร้าง</option>
												<option value="อื่นๆ">อื่นๆ</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="tel" class="form-control" placeholder="เบอร์มือถือ *" id="phone" name="mobile" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group" style="text-align: left;">
											<input class="checkbox-style" type="checkbox" name="description[pdpa-consent-8baht]" id="select-all"  value="checked">
											<label class="checkbox-style-3-label" for="select-all" style="font-weight: normal; margin-left:10px; text-align:left;">
											ยินดีรับข้อมูลข่าวสารจากเรา และบริษัทในเครือ <br/><span style="margin-left: 40px;">(รายละเอียดเพิ่มเติม <a  href="https://8baht.com/privacy-policy/">Privacy Policy</a>)</span>
											</label>
										</div>
									</div>
									<div class="col-md-12 mt-20">
										<div class="form-group title-center">
											<input  type="hidden" name="url_path" value="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
											<input type="hidden" name="redirect" value="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
											<input type="hidden" name="industry" value="-" />
											<input type="hidden" name="province" value="-" />
											<input type="hidden" name="campaignid" value="1072941" />
											<input type="hidden" name="mailtoteam" value="dowload_gstartcad_free_trial_8b" />
											<input type="hidden" name="regis_type" value="download-gstartcad" />
											<input  type="hidden" name="urlreference" value="<?PHP if(!empty($_GET["ref"])) { ?> <?php echo $_GET["ref"]; ?> <?PHP } ?>" >
											<button type="submit" class="button b-blue button-rounded tright" id="submit" name="submit" > ดาวน์โหลดโปรแกรม | <i class="icon-download-alt"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="clear"></div>
						<div class="col_full mg-top-50">
							<div class="title-center">
								แชร์หน้านี้ให้เพื่อนๆ ของคุณ
								<img class="icon-contact-ft" src="<?PHP echo base_url(); ?>images/icons/share-fill@2x.png" alt="facebook" style="margin-right: 10px;" >
								<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.8baht.com%2Fgstarcad%2Fdemo.php&amp;src=sdkpreparse"><img class="lazy icon-contact-ft" src="<?PHP echo base_url(); ?>images/icons/facebook.png" alt="facebook" style="margin-right: 10px;" ></a>
								<a href="https://social-plugins.line.me/lineit/share?url=https%3a%2f%2f8baht.com%2fgstarcad%2fdemo.php"><img class="lazy icon-contact-ft" src="<?PHP echo base_url(); ?>images/icons/line.png" alt="email" ></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" >

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container clearfix">
					<div class="title-center">
						<small>&copy; สงวนลิขสิทธิ์ 2021 บริษัท แอพพลิแคด จำกัด (มหาชน)</small>
					</div>
				</div>
			</div>
			<!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div>
	<!-- #wrapper end -->
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/functions.js"></script>

	<script>
		window.lazyLoadOptions = {
			elements_selector: '.lazy'
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>

	<!-- Start of LiveChat (www.livechatinc.com) code -->
	<script type="text/javascript">
	window.__lc = window.__lc || {};
	window.__lc.license = 10843677;
	(function() {
		var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
		lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
	})();
	</script>
	<noscript>
	<a href="https://www.livechatinc.com/chat-with/10843677/" rel="nofollow">Chat with us</a>,
	powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
	</noscript>
	<!-- End of LiveChat code -->

</body>
</html>