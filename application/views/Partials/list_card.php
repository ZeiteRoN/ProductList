<div id="js-list-card" class="w-48 h-64 flex flex-col justify-between border-2 rounded-lg gap-4 mt-4 bg-amber-100 hover:scale-105 transition shadow-xl hover:shadow-2xl">
	<div>
		<form action="<?php echo 'setStatus/'.$list->id?>" method="post" class="flex flex-col justify-between">
				<div class="hidden">
					<textarea name="category" class="resize-none bg-amber-100" id="" cols="1" rows="1"><?php echo $list->category_id?></textarea>
				</div>
				<div id="js-text">
					<textarea name="text" class="resize-none bg-amber-100" cols="15" rows="3"><?php echo $list->text; ?></textarea>
				</div>
			<div class="flex gap-4">
				<button id="js-status-btn" class="bg-gray-300 rounded-lg">Куплено?</button>
				<div class="flex justify-end ">
					<?php if ($list->status == 1): ?>
						<div class="bg-green-800 w-6 h-6">

						</div>
					<?php endif; ?>
					<?php if ($list->status == 0): ?>
						<div class="bg-red-500 w-6 h-6">

						</div>
					<?php endif; ?>
				</div>
			</div>

		</form>
	</div>
	<div>
		<?php echo $list->created_at; ?>
	</div>
	<div class="flex justify-end p-2">
		<a href="<?php echo 'delete/'.$list->id?>" class="bg-red-500 rounded-lg">Delete</a>
	</div>
</div>
<script>
	$(document).ready(function () {
		const
			$card = $(document).find('#js-list-card'),
			$status = $card.find('#js-status'),
			$statusSign = $card.find('#js-sign'),
			$statusBtn = $card.find('#js-status-btn')
			;

	})
</script>