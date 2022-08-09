@extends('admin.admin')

@section('content')
<style>
	textarea {
		min-height: 200px;
	}
</style>
<div class="kt-subheader kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title">Редактирование услуги</h3>
	</div>
</div>

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
		<div class="col-xl-4">
			<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay">
				<div class="kt-portlet__head kt-portlet__space-x">
					<div class="kt-portlet__head-label" style="width: 100%;">
						<h3 class="kt-portlet__head-title text-center" style="width: 100%;">
							{{$services->name}}
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="kt-widget28">
					<div class="kt-widget28__visual" style="background: url({{$services->img}}) bottom center no-repeat"></div>

					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Информация об услуге
						</h3>
					</div>
				</div>
				<!--begin::Form-->
				<form class="kt-form" method="post" action="/admin/services/save" enctype="multipart/form-data">
					@csrf
					<div class="kt-portlet__body">
						<input name="id" value="{{$services->id}}" type="hidden">
						<input name="img_save" value="{{$services->img}}" type="hidden">
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Название:</label>
								<input type="text" class="form-control" name="name" value="{{$services->name}}">
							</div>

							<div class="col-lg-6">
								<label class="">Картинка:</label>
								<input class="form-control" type="file" accept="image/*" name="img">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-lg-6">
								<label>Описание:</label>
								<div class="kt-input-icon">
									<textarea type="text" class="form-control" name="description">{{$services->description}}</textarea>
									<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="fas fa-book-open"></i></span></span>
								</div>
							</div>
							<div class="col-lg-6">
								<label>Названия информаций:</label>
								<div class="kt-input-icon">
									<div class="form-group row" style="display: flex; margin-left:0;">
										<input type="text" class="form-control" placeholder="text" id="info_input" style="width: 50%;">
										<button type="button" class="btn btn-primary" style="margin-left: auto;" id="addInfo">Добавить</button>
									</div>
									<div id="info_wrapper" style="padding: 6px;">
									@foreach(json_decode($services->information) as $i)
									<div style="display: flex; align-items: center;" class="info_item"><b>{{$i}}</b> <a style="margin-left: auto;" class="btn_del btn btn-sm btn-clean btn-icon btn-icon-md del_info" onclick="del_info(this);" title="Удалить"><i class="fas fa-times"></i></a></div>
									
									@endforeach
										
									</div>
								</div>
							</div>
						</div>


						<div class="form-group row">
							<div class="col-lg-6">
								<label>Каталог:</label>
								<select class="form-control" name="catalog_id">
									@foreach($Сatalog as $c)
									<option value="{{$c->id}}" @if($c->id == $services->catalog_id) selected @endif>{{$c->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-6">
								<label>Статус:</label>
								<select class="form-control" name="status">
									<option value="1" @if($services->status) selected @endif>Опубликован</option>
									<option value="0" @if(!$services->status) selected @endif>Скрыт</option>
								</select>
							</div>
						</div>

					</div>
					<div class="kt-portlet__foot kt-portlet__foot--solid">
						<div class="kt-form__actions">
							<div class="row">
								<div class="col-12">
									<button type="button" class="btn btn-brand" id="info_submit">Сохранить</button>
								</div>
							</div>
						</div>
					</div>
					<input type="hidden" class="form-control" required placeholder="Название" name="information" id="information_input">
					<input type="submit" id="submit_input" style="display: none;">
				</form>
				<!--end::Form-->

			</div>
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
		$.each(info, function(index, value) {
			str_info[index] = $(value).text();
		});

		$("#information_input").val(JSON.stringify(str_info));
		$("#submit_input").click();
	});
</script>
@endsection