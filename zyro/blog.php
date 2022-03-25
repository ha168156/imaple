<?php if ($lang == 'en') { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.16" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1452221907" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1452221907" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = 'en';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 249px;">
	
<div id="wb_element_instance77" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="en/%E5%9B%9E%E9%A6%96%E9%A1%B5/" target="_self" title=" 回首页"> 回首页</a></li><li><a href="en/%E5%85%B3%E4%BA%8E%E9%80%9F%E4%BF%AE/" target="_self" title="关于速修">关于速修</a></li><li><a href="en/%E4%BA%A7%E5%93%81%E4%B8%8E%E6%9C%8D%E5%8A%A1/" target="_self" title="产品与服务">产品与服务</a></li><li><a href="en/%E8%81%94%E7%BB%9C%E6%88%91%E4%BB%AC/" target="_self" title=" 联络我们"> 联络我们</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance77'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); elem.find('ul').each(function() { var ul = $(this); if (ul.parent('li').length > 0) { ul.parent('li').eq(0).children('a').on('click', function() { if (!isOpen) return true; if (ul.css('display') !== 'block') ul.css({display: 'block'}); else ul.css({display: ''}); return false; }); } }); })(); </script></div><div id="wb_element_instance78" class="wb_element"><div></div></div><div id="wb_element_instance79" class="wb_element" style=" line-height: normal;"><p>厦门速修网科技有限公司</p>

<h4 class="wb-stl-pagetitle"><a href="en/%E5%9B%9E%E9%A6%96%E9%A1%B5/">Speed repair Network Technology</a></h4>
</div><div id="wb_element_instance80" class="wb_element"><div></div></div><div id="wb_element_instance81" class="wb_element"><div></div></div><div id="wb_element_instance82" class="wb_element"><div></div></div><div id="wb_element_instance83" class="wb_element"><img alt="" src="gallery_gen/d7a061a33a2cd3582c8efb42c83eeffb_60x60.png"></div><div id="wb_element_instance84" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">Member of <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "39626b389deca2cd51b7286e21df2633", cont: "wb_element_instance84"});

				(function() {
					var script = document.createElement("script");
					var src = "http://zyro.com/examples/getjs/";
					script.type = "text/javascript";
					script.async = true;
					script.src = src.replace(/http.*:/, location.protocol);
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance85" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance85");
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
					$("#wb_element_instance85").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance86" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>

<?php } ?>
