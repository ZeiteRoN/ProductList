<div id="content">
	<div class="flex gap-4">
		<?php foreach ($lists as $list) :
			include ("Partials/list_card.php");
		endforeach; ?>
	</div>
	<div class="h-64 w-48 rounded flex">
		<button id="js-add-button" class="hover:scale-105 hover:shadow transition border-4 m-auto w-12 h-12 rounded-3xl font-bold text-3xl">+</button>
	</div>
	<div id="js-popup-cont" class="hidden">
		<?php include ("add_popup.php")?>
	</div>
</div>
<script>
	$(document).ready(function () {
		const
			$popupCont = $('#content').find('#js-popup-cont')
		;
		$('#js-add-button').on("click", function () {
			$popupCont.removeClass('hidden');
		})
		$('#js-close-btn').on("click", function () {
			$popupCont.addClass('hidden');
		})
	})
</script>
