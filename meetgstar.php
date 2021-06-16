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
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>style.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/colors.css" type="text/css" />

	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/components/timepicker.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/components/daterangepicker.css" type="text/css" />

	<!-- Radio Checkbox Plugin -->
	<link rel="stylesheet" href="<?PHP echo base_url(); ?>css/components/radio-checkbox.css" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>GstartCAD Meet- 8BAHT.COM</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta http-equiv="Content-Language" content="th">
	<meta name="author" content="GstartCAD Meet - 8BAHT.COM" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

	<meta name="keywords" content="gstarcad,8baht,gstarcad ดาวน์โหลดฟรี,GstarCAD,GstarCAD download,gstarcad ทดลองใช้,GstarCAD ราคา">
	<meta name="description" content="GstarCAD คือซอฟต์แวร์เขียนแบบ 2D/3D นิยมใช้ในงานเขียนแบบก่อสร้าง หรืองานวิศวกรรม เป็น CAD ทางเลือกที่มีฟังก์ชั่นการใช้งาน และ Interface ที่เหมือนกับ AutoCAD เพียง 15 นาที จะพบว่าคุณคุ้นเคยกับโปรแกรมตัวนี้">
	<meta name="language" content="TH">
	<meta name="revisit-after" content="1 day" />
	<meta name='copyright' content='8BAHT.COM'>

	<meta property="og:site_name" content="GstartCAD - 8BAHT.COM"/>
	<meta property="og:og:locale" content="th-TH"/>

	<!-- facebook -->
	<meta property="og:url" content="https://www.8baht.com/gstarcad/meetgstart.php"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="GstarCAD Meet - 8baht.com" />
	<meta property="og:description" content="GstarCAD คือซอฟต์แวร์เขียนแบบ 2D/3D นิยมใช้ในงานเขียนแบบก่อสร้าง หรืองานวิศวกรรม เป็น CAD ทางเลือกที่มีฟังก์ชั่นการใช้งาน และ Interface ที่เหมือนกับ AutoCAD เพียง 15 นาที จะพบว่าคุณคุ้นเคยกับโปรแกรมตัวนี้" />
	<meta property="og:image" content="https://8baht.com/gstarcad/images/GstarCAD product.png" />
	
	<style>
		.checkbox-style:checked + .checkbox-style-3-label:before, .radio-style:checked + .radio-style-3-label:before {
			content: "\e116";
			font-family: 'lined-icons';
			background: #0a2955;
			color: #FFF;
		}
		.container{
			width: 50% !important;
		}
		.stretched #gotoTop {
			bottom: 80px;
		}
		#header.transparent-header {
			background-color: #f8f8f8 !important;
		}
		.mg-bottom-10{
			margin-bottom: 10px;
		}
		.co-bule{color: #0a2955;}
		select{ height: 41px !important;}
		.button-2B2E7B{
			background: #2B2E7B;
			color: #fff;
		}
		.content-wrap {
			position: relative;
			padding: 20px 0 !important;
		}
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

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="title-center">
						<img src="<?PHP echo base_url(); ?>images/logo/logo-gstar-cad-011.png" alt="line" >
						<h4 style="margin-top: 10px;">จองคิวนัด Demo / นำเสนอออนไลน์</h4>
					</div>
				</div>
				<div class="container clearfix">
					<form id="request-quotation" method="post" action="#" class="nobottommargin">
						<div class="row">
							<div class="col-xs-12"><h5 class="mg-bottom-10">จองวันที่นัดหมาย</h5></div>
							<div class="col-md-6">
								<div class="form-group">
									จำนวนผู้เข้าฟัง <span>*</span>
									<select id="text_people_number" name="text_people_number" class="sm-form-control" required>
										<option value="1-5 คน">1-5 คน</option>
										<option value="6-10 คน">6-10 คน</option>
										<option value="11-15 คน">11-15 คน</option>
										<option value="20 คนขึ้นไป">20 คนขึ้นไป</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group travel-date-group" >
									วันที่นัดหมาย <span>*</span>
									<input type="text" id="text_date" name="text_date"  value="" class="sm-form-control format" placeholder="DD-MM-YYYY" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12"><h5 class="mg-bottom-10">ช่วงเวลาที่สะดวก</h5></div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-daterange input-group">
										<input type="text" id="startTime" name="txt_startTime" class="sm-form-control datetimepicker1" value="" placeholder="24 hr" required>
										<span class="input-group-addon">ถึง</span>
										<input type="text" id="endTime" name="text_endTime" class="sm-form-control datetimepicker1" value="" placeholder="24 hr" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12"><h5 class="mg-bottom-10">บอกเราหน่อย! ว่าคุณใช้งานแบบไหน</h5></div>
							<div class="col-md-4">
								<div class="form-group">
									ระบุลักษณะงานออกแบบ<span>*</span>
									<input id="text_cad_des" name="text_cad_des" class="sm-form-control" required>
								</div>
							</div>
							<div class="col-md-8">
								ซอฟต์แวร์ CAD ที่องค์กรท่านใช้อยู่ปัจจุบัน <span>*</span>
								<div class="col-md-8" style="padding-left: 0px; padding-right: 5px;">
									<div class="form-group">
										<select id="text_cad_detail" name="text_cad_detail" class="sm-form-control" required>
											<option value="AutoCAD">AutoCAD</option>
											<option value="AutoCAD LT">AutoCAD LT</option>
											<option value="ยังไม่เคยใช้งาน">ยังไม่เคยใช้งาน</option>
											<option value="อื่นๆ">อื่นๆ</option>
										</select>
									</div>
								</div>
								<div class="col-md-4" style="padding-left: 0px; padding-right: 0px;">
									<div class="form-group">
										<input type="text" id="txt_other" name="txt_other" class="sm-form-control" value="" placeholder="โปรดระบุ">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12"><h5 class="mg-bottom-10">ข้อมูลผู้นัดหมาย</h5></div>
							<div class="col-md-6">
								<div class="form-group">
									ชื่อ<span>*</span>
									<input id="firstname" name="firstname" class="sm-form-control" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									นามสกุล <span>*</span>
									<input id="lastname" name="lastname" class="sm-form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									ชื่อบริษัท (กรุณาใส่เป็นภาษาอังกฤษ)
									<input class="sm-form-control" placeholder="ชื่อบริษัท (ถ้ามีกรอกเป็นภาษาอังกฤษเท่านั้น!)" id="company" name="company">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									เบอร์ติดต่อ<span>*</span>
									<input type="tel" class="sm-form-control" id="phone" name="mobile" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									อีเมล์<span>*</span>
									<input class="sm-form-control" placeholder="อีเมล์ (สำหรับส่งใบเสนอราคา) *" id="email" name="email" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									ข้อความถึงเรา (ถ้ามี)
									<textarea class="sm-form-control" icols="60" rows="3" id="comment" name="description[message]"></textarea>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group" style="text-align: left;">
									<div>
										<input class="checkbox-style" type="checkbox" name="description[pdpa-consent-8baht]" id="select-all"  value="checked">
										<label class="checkbox-style-3-label" for="select-all" style="font-weight: normal;">
											ยินดีรับข้อมูลข่าวสารจากเรา และบริษัทในเครือ (รายละเอียดเพิ่มเติม <a href="https://8baht.com/privacy-policy/">Privacy Policy</a>)
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group title-center">
									<input  type="hidden" name="url_path" value="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
									<input type="hidden" name="redirect" value="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
									<input type="hidden" name="industry" value="-" />
									<input type="hidden" name="province" value="-" />
									<input type="hidden" name="campaignid" value="1144001" />
									<input type="hidden" name="mailtoteam" value="8baht_Appointment Demo" />
									<input type="hidden" name="regis_type" value="quotation" />
									<input  type="hidden" name="urlreference" value="<?PHP if(!empty($_GET["ref"])) { ?> <?php echo $_GET["ref"]; ?> <?PHP } ?>" >
									<button type="submit" class="button button-2B2E7B button-large button-rounded" id="submit" name="submit" > ทำการนัดหมาย | <img style="max-width: 25px;" src="<?PHP echo base_url(); ?>images/icons/calendar.png" alt="line" ></button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="form-group title-center co-bule">
								บริษัท แอพพลิแคด จำกัด (มหาชน) ให้ความสำคัญต่อความเป็นส่วนตัวผู้ลงทะเบียนใช้งานและทำงานอย่างดีที่สุดเพื่อรักษาความลับ และควบคุมข้อมูลส่วนบุคคลของคุณให้ปลอดภัย
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="container" style="padding-left: 0; padding-right:0" >

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="clearfix">
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

	<!-- Date & Time Picker JS -->
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/components/moment.js"></script>
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/datepicker.js"></script>
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/components/timepicker.js"></script>

	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="<?PHP echo base_url(); ?>js/components/daterangepicker.js"></script>

	<input type="hidden" id="minD" name="minD" value="<?PHP echo date('m-d-Y') ?>"/>
	<script type="text/javascript">

		$(function() {
			$('.travel-date-group .format').datepicker({
				autoclose: true,
				format: "dd-mm-yyyy",
				startDate: "today",
				todayHighlight: true
			});
			$('.datetimepicker1').datetimepicker({
				showClose: true,
				format: 'HH:mm',
			});
		});
	</script>

	<script>
		/********  English Company  ********/
    	$('#company').attr("autocomplete","off");
		var str_current_value = $('#company').val();
			
		$('#company').keyup(function(event){

			var orgi_text="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890;:<>?._-, ~#&()@!'*+}{][$%^/|=\"";
    		var str = $('#company').val();
    		var str_length=str.length;
    		var str_length_end=str_length-1;
    		var isEng=true;
    		var Char_At="";
			for(i=0;i<str_length;i++){
				Char_At=str.charAt(i);
				if(orgi_text.indexOf(Char_At)==-1){
					isEng=false;
				}
			}
			if(str_length>=1){
				if(isEng==false){
					$('#company').val(str_current_value);
				}
			}
	
		});
	</script>
	
	<script>
		window.lazyLoadOptions = {
			elements_selector: '.lazy'
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>

	
</body>
</html>