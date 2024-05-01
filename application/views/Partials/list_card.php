<div class="w-48 h-64 flex flex-col justify-between border-2 rounded-lg gap-4 mt-4 bg-amber-100 hover:scale-105 transition shadow-xl hover:shadow-2xl">
	<div>
		<div>
			<?php echo $list->text; ?>
		</div>
		<div>
			<?php echo $list->created_at; ?>
		</div>
	</div>
	<div class="flex justify-end p-2">
		<a href="<?php echo 'delete/'.$list->id?>" class="bg-red-500 rounded-lg">Delete</a>
	</div>
</div>