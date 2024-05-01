<div class="flex flex-col justify-between">
	<div class="w-full flex justify-end">
		<button id="js-close-category" class="border w-6 text-white bg-black rounded-2xl">X</button>
	</div>
	<form action="<?php echo 'createCategory'?>" method="post">
		<h2>Нова категорія</h2>
		<input class="border-2" name="category-input" type="text" placeholder="Назва">
		<button class="bg-blue-600 rounded-lg">Додати</button>
	</form>
</div>
