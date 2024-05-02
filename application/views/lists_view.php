<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Списки</title>
</head>
<body>
	<?php include("Partials/nav.php"); ?>
	<div id="content">
		<div class="flex flex-col gap-4">
			<div class="flex gap-6">
				<form action="filterById" method="post">
					<select class="border-2 rounded-lg" name="filter">
						<?php foreach ($categories as $category): ?>
							<option value="<?php echo $category->id; ?>"><?php echo $category->category; ?></option>
						<?php endforeach; ?>
					</select>
					<button class="bg-blue-600 rounded-lg">Фільтрувати</button>
				</form>
				<form action="filterByStatus" method="post">
					<select class="border-2 rounded-lg" name="statusFilter">
						<option value="1">Куплено</option>
						<option value="0">Не куплено</option>
					</select>
					<button class="bg-blue-600 rounded-lg">Фільтрувати</button>
				</form>
			</div>

			<div class="flex gap-4">
				<?php foreach ($lists as $list) :
					include ("Partials/list_card.php");
				endforeach; ?>
			</div>
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
</body>
</html>
<script>
	$(document).ready(function () {
		const
			$popupCont = $('#content').find('#js-popup-cont'),
			$categoryPopup = $('#content').find('#js-category-popup'),
			$filterSelect  = $('#content').find('#filter-select')
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
