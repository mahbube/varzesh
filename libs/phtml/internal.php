<header id='fix_top_content'> <!-- fix content top-->
<!-- start main content -->
<div class="topmenu_content_container">
	<div class="tmc_top"></div>
	<div class="tmc_content">
		<?php echo $content_internal ?>
		
			<!--<p class="menu_ttl-1" onclick="toggle_menu('.menu_con-1')">لورم ایپسوم متنی است که ساختگی</p>
			<div class="menu_con-1">
				لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود.
			</div>-->
	</div>
	<div class="tmc_bottom"></div>
</div>
<!-- end main content -->

<!--  fix content  bottom-->
<script type='text/javascript'>
	$(function(){
		$.ajax({
			url : '/varzesh/fix_top_content.html',
			success : function(data){
				$('#fix_top_content').prepend(data);
			}
		})
	})
</script>

</div>
</header>
<section id="fix_bottom_content">
<script type='text/javascript'>
	$(function(){
		$.ajax({
			url : '/varzesh/fix_bottom_content.html',
			success : function(data){
				$('#fix_bottom_content').html(data);
			}
		})
	})
</script>
</section>