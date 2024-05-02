<div id="js-form-cont" class="h-64 w-72 border-2 shadow-2xl">
	<div class="w-full flex justify-end">
		<button id="js-close-btn" class="border w-6 text-white bg-black rounded-2xl">X</button>
	</div>
	<div>
		<form action="create" method="post" class="flex flex-col gap-6">
			<div>
				<select name="category" id="js-category-select"  class="border-2 border-gray-300 rounded-md p-2">
					<?php foreach ($categories as $category): ?>
					<option value="<?php echo $category->id; ?>"><?php echo $category->category; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div>
				<textarea class="border-2 border-gray-300 rounded-md max-h-24" name="products" id="js-product-list" cols="20" rows="5" placeholder="Введіть списко продуктів"></textarea>
			</div>
			<button id="js-submit-button" class="bg-blue-600 rounded-lg">Підтвердити</button>
		</form>
	</div>
</div>