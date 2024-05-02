<div id="js-list-card" class="w-48 h-64 flex flex-col justify-between border-2 rounded-lg gap-4 mt-4 bg-amber-100 hover:scale-105 transition shadow-xl hover:shadow-2xl">
	<form action="<?php echo 'setStatus/' . $list->id ?>" method="post" class="flex flex-col justify-between">
		<div class="hidden">
			<textarea name="category" class="resize-none bg-amber-100" id="" cols="1" rows="1"><?php echo $list->category_id ?></textarea>
		</div>
		<div>
			Категорія: <?php echo $list->category_title; ?>
		</div>
		<textarea name="text" class="resize-none bg-amber-100" cols="15" rows="3"><?php echo $list->text; ?></textarea>
		<div class="flex gap-4">
			<button id="js-status-btn" class="bg-gray-300 rounded-lg">Куплено?</button>
			<div class="flex justify-end">
				<div class="<?php echo $list->status == 1 ? 'bg-green-800' : 'bg-red-500' ?> w-6 h-6"></div>
			</div>
		</div>
	</form>
	<div>
		<?php echo $list->created_at; ?>
	</div>
	<div class="flex justify-end p-2">
		<a href="<?php echo 'delete/' . $list->id ?>" class="bg-red-500 rounded-lg">Видалити</a>
	</div>
</div>