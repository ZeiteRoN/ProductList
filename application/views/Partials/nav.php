<?php ?>

<div class="bg-blue-300 h-20 flex justify-between items-center">
	<div class="text-5xl">
		<div>Product List</div>
	</div>
	<div class="mr-2 flex gap-3 items-center text-2xl">
		<div>
			<a id="js-home-link" href="">Home</a>
		</div>
		<div>
			<a id="js-form-link" href="">Form</a>
		</div>
		<div>
			<a id="js-contact-link" href="">Contact</a>
		</div>
		<div>
			<a id="js-login-link" href="">Log in</a>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#js-home-link').click(function(e) {
			e.preventDefault();
			$.get('<?php echo site_url('home'); ?>', function(data) {
				$('#content').html(data);
			});
		});

		$('#js-form-link').click(function(e) {
			e.preventDefault();
			$.get('<?php echo site_url('form'); ?>', function(data) {
				$('#content').html(data);
			});
		});
		$('#js-contact-link').click(function(e) {
			e.preventDefault();
			$.get('<?php echo site_url('contact'); ?>', function(data) {
				$('#content').html(data);
			});
		});
		$('#js-login-link').click(function(e) {
			e.preventDefault();
			$.get('<?php echo site_url('login'); ?>', function(data) {
				$('#content').html(data);
			});
		});
	});
</script>

