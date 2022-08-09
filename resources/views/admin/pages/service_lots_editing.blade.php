@extends('admin.admin')

@section('content')
<style>
	textarea {
		min-height: 200px;
	}
</style>
<div class="kt-subheader kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title">Редактирование лота</h3>
	</div>
</div>

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
		<div class="col-xl-4">
			<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay">
				<div class="kt-portlet__head kt-portlet__space-x">
					<div class="kt-portlet__head-label" style="width: 100%;">
						<h3 class="kt-portlet__head-title text-center" style="width: 100%;">
							{{$ServiceLot->id}}
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="kt-widget28">


					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Информация об лоте
						</h3>
					</div>
				</div>
				<!--begin::Form-->
				<form class="kt-form" method="post" action="/admin/service_lots/save" enctype="multipart/form-data">
					@csrf
					<div class="kt-portlet__body">
						<input name="id" value="{{$ServiceLot->id}}" type="hidden">

						<div class="form-group row">
							<div class="col-lg-6">
								<label>Каталог:</label>
								<select class="form-control" name="services_id" id="catalog_id">
									@foreach($Service as $s)
									<option value="{{$s->id}}" @if($s->id == $ServiceLot->services_id) selected @endif>{{$s->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-6">
								<label>Значение информаций:</label>
								<div id="info_wrapper">
									@foreach(json_decode($ServiceLot_Service->information) as $i_service_key => $i_service)
									@foreach(json_decode($ServiceLot->information) as $i_ServiceLot_key => $i_ServiceLot)
									@if($i_service_key == $i_ServiceLot_key)
									<div style="display: flex; margin-left:0; align-items: stretch;">
										<div style="display: flex; align-items: center;" class="info_item"><b>{{$i_service}}</b></div>
										<input type="text" class="form-control" required placeholder="text" id="info_input" style="width: 50%;     margin-left: auto;" value="{{$i_ServiceLot}}">
									</div>
									@endif
									@endforeach
									@endforeach
								</div>
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
	$("#catalog_id").change(function() {

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