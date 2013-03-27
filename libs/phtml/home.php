<header id='fix_top_content'> <!-- fix content top-->
<!-- start main content -->

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