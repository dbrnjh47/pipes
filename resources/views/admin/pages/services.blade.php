@extends('admin.admin')

@section('content')
<style>
	.btn.btn_del i {
		color: #d220617a;
	}

	.btn.btn_del:hover i {
		color: #d22061;
	}
</style>
<script src="/temple/pk/admin/dash/js/ajax-services.js?v=<?php echo time() ?>" type="text/javascript"></script>
<div class="kt-subheader kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title">Услуги</h3>
	</div>
</div>

<div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-label">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon-users"></i>
				</span>
				<h3 class="kt-portlet__head-title">
					Список услуг
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="kt-portlet__head-actions">
						<a data-toggle="modal" href="#new" class="btn btn-success btn-elevate btn-icon-sm">
							<i class="la la-plus"></i>
							Добавить услугу
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="kt-portlet__body">

			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="ajax-users">
				<thead>
					<tr>
						<th>ID</th>
						<th>Название</th>
						<th>Картинка</th>
						<th>Краткое описание</th>
						<th>Статус</th>
						<th>Каталог</th>
						<th>Дата создания</th>
						<th>Действия</th>
					</tr>
				</thead>
			</table>

			<!--end: Datatable -->
		</div>
	</div>
</div>

<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="newLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Новая услуга</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<form class="kt-form-new" method="post" enctype="multipart/form-data" action="/admin/services/add">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Название:</label>
						<input type="text" class="form-control" required placeholder="Название" name="name">
					</div>
					<div class="form-group">
						<label for="img">Картинка:</label>
						<input type="file" class="form-control" name="img" accept="image/*">
					</div>
					<div class="form-group">
						<label for="status">Статус:</label>
						<select class="form-control" name="status">
							<option value="0">Скрыт</option>
							<option value="1" selected="">Опубликован</option>
						</select>
					</div>
					<div class="form-group">
						<label for="description">Описание:</label>
						<input type="text" class="form-control" required placeholder="text" name="description">
					</div>
					<div class="form-group">
						<label for="created_at">Каталог:</label>
						<select class="form-control" name="catalog_id">
							@foreach($Сatalog as $c)
							<option value="{{$c->id}}">{{$c->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="created_at">Названия информаций:</label>
						<div class="form-group row" style="display: flex; margin-left:0;">
							<input type="text" class="form-control" placeholder="text" id="info_input" style="width: 50%;">
							<button type="button" class="btn btn-primary" style="margin-left: auto;" id="addInfo">Добавить</button>
						</div>
						<div id="info_wrapper">
							<div style="display: flex; align-items: center;" class="info_item"><b>Марка</b> <a style="margin-left: auto;" class="btn_del btn btn-sm btn-clean btn-icon btn-icon-md del_info" onclick="del_info(this);" title="Удалить"><i class="fas fa-times"></i></a></div>
						</div>
					</div>
					<input type="submit" id="submit_input" style="display: none;">
					<input type="hidden" class="form-control" required placeholder="Название" name="information" id="information_input">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="button" class="btn btn-primary" id="info_submit">Добавить</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	function del_info($click) {
		$($click).parent(".info_item").remove();
	}

	$("#addInfo").click(function() {
		console.log($("#info_input").val());
		if ($("#info_input").val() != '') {
			$("#info_wrapper").append(`<div style="display: flex; align-items: center;" class="info_item"><b>` + $("#info_input").val() + `</b> <a style="margin-left: auto;" onclick="del_info(this);" class="btn_del btn btn-sm btn-clean btn-icon btn-icon-md del_info" title="Удалить"><i class="fas fa-times"></i></a></div>`);
			$("#info_input").val("");
		}
	});

	$("#info_submit").click(function() {
		var info = $("#info_wrapper .info_item b");
		var str_info = [];
		$.each(info,function(index,value){
			str_info[index] = $(value).text();
		});

		$("#information_input").val(JSON.stringify(str_info));
		$("#submit_input").click();
	});
</script>
@endsection