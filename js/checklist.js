function GetAllDoneItem()
{
	var done_items = [];
	$(".todo-item.done").each(function () {
		done_items.push($(this).find(".todo-check").val());
	});
	return done_items;
}

$().ready(function() {
	$(".todo-check").click(function() {
		if ($(this).prop("checked")) {
			var todo_item = $(this).closest(".todo-item");
			if (!$(todo_item).hasClass("done"))
				$(todo_item).addClass("done");
		}
		else {
			var todo_item = $(this).closest(".todo-item");
			if ($(todo_item).hasClass("done"))
				$(todo_item).removeClass("done");
		}
	});
});