<?php get_header('learning'); ?>

<section id="learning-section" class="learning-section learn-section">
	<div class="container">
		<div class="title-ct">
			<h3><strong>Unit 1</strong>Duis vel ullamcorper mauris, eu pretium felis. Duis gravida laoreet velit.</h3>
			<div class="tt-right">
				<input type="checkbox" id="markaslearned">
				<label for="markaslearned">
					Mark as learned
					<i class="icon md-check-2"></i>
				</label>
			</div>
		</div>
		<div class="abc">
		<div class="video embed-responsive embed-responsive-16by9">
			<iframe src="<?=qiniu_get_real_download_url('变形金刚第一部预告片.mp4')?>" class="embed-responsive-item">
			</iframe>
		</div>
		</div>
	</div>
</section>

<?php get_footer('learning'); ?>