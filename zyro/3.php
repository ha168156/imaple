<?php if ($lang == 'en') { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contacts</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.16" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1452221907" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1452221907" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = 'en';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance40" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="en/%E5%9B%9E%E9%A6%96%E9%A1%B5/" target="_self" title=" 回首页"> 回首页</a></li><li><a href="en/%E5%85%B3%E4%BA%8E%E9%80%9F%E4%BF%AE/" target="_self" title="关于速修">关于速修</a></li><li><a href="en/%E4%BA%A7%E5%93%81%E4%B8%8E%E6%9C%8D%E5%8A%A1/" target="_self" title="产品与服务">产品与服务</a></li><li class="active"><a href="en/%E8%81%94%E7%BB%9C%E6%88%91%E4%BB%AC/" target="_self" title=" 联络我们"> 联络我们</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance40'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); elem.find('ul').each(function() { var ul = $(this); if (ul.parent('li').length > 0) { ul.parent('li').eq(0).children('a').on('click', function() { if (!isOpen) return true; if (ul.css('display') !== 'block') ul.css({display: 'block'}); else ul.css({display: ''}); return false; }); } }); })(); </script></div><div id="wb_element_instance41" class="wb_element"><div></div></div><div id="wb_element_instance42" class="wb_element" style=" line-height: normal;"><p>厦门速修网科技有限公司</p>

<h4 class="wb-stl-pagetitle"><a href="en/%E5%9B%9E%E9%A6%96%E9%A1%B5/">Speed repair Network Technology</a></h4>
</div><div id="wb_element_instance43" class="wb_element"><div></div></div><div id="wb_element_instance44" class="wb_element"><div></div></div><div id="wb_element_instance45" class="wb_element"><div></div></div><div id="wb_element_instance46" class="wb_element"><img alt="" src="gallery_gen/d7a061a33a2cd3582c8efb42c83eeffb_60x60.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance48" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><span style="font-size: 16px; font-weight: normal; line-height: 26px; background-color: transparent;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</span></p>
<p class="wb-stl-normal">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p class="wb-stl-normal"> </p></div><div id="wb_element_instance49" class="wb_element"><form class="wb_form" method="post"><input type="hidden" name="wb_form_id" value="32a09f09"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th class="wb-stl-normal">Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-field" type="text" value="" name="wb_input_1"></td></tr><tr class="area-row"><th class="wb-stl-normal">Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-field form-area-field" rows="3" cols="20" name="wb_input_2"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn">Submit</button></td></tr></table></form><script type="text/javascript">
			var formValues = <?php echo json_encode($_POST); ?>;
			var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
			wb_form_validateForm("32a09f09", formValues, formErrors);
			<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
				setTimeout(function() {
					alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
				}, 1);
			<?php } ?>	
			</script></div><div id="wb_element_instance50" class="wb_element"><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places"></script><script type="text/javascript">
				function initialize() {
					if (window.google) {
						var div = document.getElementById("wb_element_instance50");
						var ll = new google.maps.LatLng(24.488448,118.09660699999995);
						var map = new google.maps.Map(div, {
							zoom: 14,
							center: ll,
							mapTypeId: "roadmap"
						});
						
						var marker = new google.maps.Marker({
							position: ll,
							clickable: false,
							map: map
						});
					}
				}
				google.maps.event.addDomListener(window, "load", initialize);
			</script></div><div id="wb_element_instance51" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">联络我们</h4>
</div><div id="wb_element_instance52" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance52");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance52").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 147px;">
	
<div id="wb_element_instance47" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">Member of <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "39626b389deca2cd51b7286e21df2633", cont: "wb_element_instance47"});

				(function() {
					var script = document.createElement("script");
					var src = "http://zyro.com/examples/getjs/";
					script.type = "text/javascript";
					script.async = true;
					script.src = src.replace(/http.*:/, location.protocol);
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance53" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(80);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>

<?php } ?>
