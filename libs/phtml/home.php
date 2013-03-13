<header>
	<div class="topmenu_bg"></div>
	<div class="mainmenu_container">
		<div class="logo">
			<a href="">
				<img src="./images/logo.png" alt="Logo">
			</a>
		</div>
		<div class="topmenu_container">
			<div class="topmenu">
				<a href="" id="item1">
					<p><span class='big_ttl'>اطلاعات جامع</span><br/>
					<span class="small_ttl">منوهای دیگر یاست</span></p>
				</a>
				<a href="" id="item2">
					<p><span class='big_ttl'>گزارش تصویری</span><br/>
					<span class="small_ttl">آلبوم تیاویر هییت ورزش</span></p>
				</a>
				<a href="" id="item3">
					<p><span class='big_ttl'>اخبار</span><br/>
					<span class="small_ttl">اخبار روز هییت ورزش</span></p>
				</a>
			</div>
		</div>
	</div>
</header>
<div class="slideshow">
	<div class="menu-container">
		<div class="arrow" id='prev'></div>
		<div class="arrow" id='next'></div>
		<div class="menu">
			<div class="slides">
				<?php
				$images_path = './images/slide';

				$images = scandir($images_path);
				$slidesLen = 1;
				foreach($images as $img){
					$img_arr = explode('.', $img);
					$img_type = strtolower( end($img_arr) );
					if ($img_type=='jpg') {
						echo "<div class=\"gorup-$slidesLen\"><img src=\"$images_path/$img\" /></div>";
						$slidesLen++;
					}
				}
			?>
			</div>
		</div>
	</div>
</div>
<div class="portfolio_bottom"></div>
<div class="aboutus_container">
	<div class="title"><h2>درباره ما</h2></div>
	<div class="conetent_aboutus">
		چشم اندازفعالیت هیئت تا سال 1400
این هیئت بعنوان سازمانی غیر دولتی،غیرسیاسی،غیر انتفاعی وغیرصنفی ،به مدد الهی ومشارکت تمامی ورزشکاران ورزشهای همگانی سطح استان مورد اعتماد ذینفعان وطرف ها قرارگرفته وبا عملکردی شفاف بگونه ای پاسخگو با بهره گیری از مشارکت عمومی وتخصصی کلیه اشخاص حقیقی وحقوقی توانمند در ورزش های همگانی با کارآمدی بالاکوشیده، بابکارگیری دانش ومهارتهای بروز شده بویژه در سطح شهرهای تابعه استان زمینه حضور فعال وموثر تمامی اقشار را در راه رسیدن به اهداف برنامه ای هیئت بصورت استانی فرآهم سازد. چشم اندازفعالیت هیئت تا سال 1400
این هیئت بعنوان سازمانی غیر دولتی،غیرسیاسی،غیر انتفاعی وغیرصنفی ،به مدد الهی ومشارکت تمامی ورزشکاران ورزشهای همگانی سطح استان مورد اعتماد ذینفعان وطرف ها قرارگرفته وبا عملکردی شفاف بگونه ای پاسخگو با بهره گیری از مشارکت عمومی وتخصصی کلیه اشخاص حقیقی وحقوقی توانمند در ورزش های همگانی با کارآمدی بالاکوشیده، بابکارگیری دانش ومهارتهای بروز شده بویژه در سطح شهرهای تابعه استان زمینه حضور فعال وموثر تمامی اقشار را در راه رسیدن به اهداف برنامه ای هیئت بصورت استانی فرآهم سازد. چشم اندازفعالیت هیئت تا سال 
	</div>
	<div class="aboutus_bottom"></div>
</div>
<div class="contactform_container">
	<div class="contactform_inner">
		<div class="title"><h2>تماس با ما</h2></div>
		<div class="formfields">
			<table><form>
				<tr>
					<td>نام</td>
					<td><input type="text" name='name' placeholder="نام" /></td>
				</tr>
				<tr>
					<td>ایمیل</td>
					<td><input type='email' name='email' placeholder="پست الکترونیک" /></td>
				</tr>
				<tr>
					<td>پیغام</td>
					<td><textarea name="msg" placeholder="متن پیام شما" ></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value=''></td>
				</tr>
			</form></table>
		</div>
	</div>
</div>

