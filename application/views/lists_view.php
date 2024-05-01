<div id="content">
	<div class="flex gap-4">
		<?php foreach ($lists as $list) :
			include ("Partials/list_card.php");
		endforeach; ?>
	</div>
	<div class="h-64 w-48 rounded flex">
		<button id="js-add-button" class="hover:scale-105 hover:shadow transition border-4 m-auto w-12 h-12 rounded-3xl font-bold text-3xl">+</button>
	</div>
	<div class="flex gap-6">
		<div id="js-popup-cont" class="hidden">
			<?php include("Partials/add_popup.php") ?>
		</div>
		<div class="border-2 shadow-xl justify-between hidden" id="js-category-popup">
			<?php include("Partials/category_popup.php") ?>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		const
			$popupCont = $('#content').find('#js-popup-cont'),
			$categoryPopup = $('#content').find('#js-category-popup')
		;
		$('#js-add-button').on("click", function () {
			$popupCont.removeClass('hidden');
			$categoryPopup.removeClass('hidden');
		})
		$('#js-close-btn').on("click", function () {
			$popupCont.addClass('hidden');
		})
		$('#js-close-category').on("click", function () {
			$categoryPopup.addClass('hidden');
		})
	})
</script>
