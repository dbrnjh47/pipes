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
<script src="/temple/pk/admin/dash/js/ajax-service_lots.js?v=<?php echo time() ?>" type="text/javascript"></script>
<div class="kt-subheader kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title">Лот</h3>
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
					Список лотов
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="kt-portlet__head-actions">
						<a data-toggle="modal" href="#new" class="btn btn-success btn-elevate btn-icon-sm">
							<i class="la la-plus"></i>
							Добавить лот
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
						<th>Информация</th>
						<th>Услуга</th>

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
				<h5 class="modal-title" id="exampleModalLongTitle">Новый лот</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<form class="kt-form-new" method="post" enctype="multipart/form-data" action="/admin/service_lots/add">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label for="created_at">Услуга:</label>
						<select class="form-control" name="services_id" id="catalog_id">
						<option>Выберите услугу</option>
							@foreach($Service as $s)
							<option value="{{$s->id}}">{{$s->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group" style="display: none;" id="block_info">
						<label for="created_at">Значение информаций:</label>
						
						<div id="info_wrapper">
							<div style="display: flex; margin-left:0; align-items: stretch;">
								<div style="display: flex; align-items: center;" class="info_item"><b>Марка</b></div>
								<input type="text" class="form-control" required placeholder="text" id="info_input" style="width: 50%;     margin-left: auto;">
							</div>
							
						</div>
					</div>
					<input type="submit" id="submit_input" style="display: none;">
					<input type="hidden" class="form-control" required placeholder="Название" name="information" id="information_input">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="button" class="btn btn-primary" id="info_submit" disabled>Добавить</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$("#catalog_id").change(function() {
		if($(this).val() == "Выберите услугу"){
			$("#block_info").slideUp(300);
			$("#info_submit").attr('disabled', true);
		}
		console.log($(this).val());
		$.ajax({
			url: '/admin/get-information-service/'+$(this).val(),
			type: "POST",
			success: function(data) {
				console.log(data);
				$("#info_wrapper").html("");
				data.forEach((element) => {
					$("#info_wrapper").append(`
					<div style="display: flex; margin-left:0; align-items: stretch;">
								<div style="display: flex; align-items: center;" class="info_item"><b>`+element+`</b></div>
								<input type="text" class="form-control" required placeholder="text" id="info_input" style="width: 50%;     margin-left: auto;">
							</div>
					`);
				});

				$("#block_info").slideDown(300);
				$("#info_submit").attr('disabled', false);
			},
			error: function(msg) {
				console.log(msg);
			}
		});
	});

	$("#info_submit").click(function() {
		var info = $("#info_wrapper input");
		var str_info = [];
		$.each(info, function(index, value) {
			str_info[index] = $(value).val();
		});
		console.log(str_info);

		$("#information_input").val(JSON.stringify(str_info));
		$("#submit_input").click();
	});
</script>
@endsection