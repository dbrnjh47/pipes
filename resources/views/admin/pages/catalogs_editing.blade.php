@extends('admin.admin')

@section('content')
<style>
	textarea{
		    min-height: 200px;
	}
</style>
<div class="kt-subheader kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title">Редактирование каталога</h3>
	</div>
</div>

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
		<div class="col-xl-4">
			<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay">
				<div class="kt-portlet__head kt-portlet__space-x">
					<div class="kt-portlet__head-label" style="width: 100%;">
						<h3 class="kt-portlet__head-title text-center" style="width: 100%;">
							{{$catalogs->name}}
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
							Информация о каталоге
						</h3>
					</div>
				</div>
				<!--begin::Form-->
				<form class="kt-form" method="post" action="/admin/catalogs/save" enctype="multipart/form-data">
					@csrf
					<div class="kt-portlet__body">
						<input name="id" value="{{$catalogs->id}}" type="hidden">
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Название:</label>
								<input type="text" class="form-control" name="name" value="{{$catalogs->name}}" >
							</div>

							<div class="col-lg-6">
								<label>Статус:</label>
								<select class="form-control" name="status">
									<option value="1" @if($catalogs->status) selected @endif>Опубликован</option>
									<option value="0" @if(!$catalogs->status) selected @endif>Скрыт</option>
								</select>
							</div>
						</div>
						
					</div>
					<div class="kt-portlet__foot kt-portlet__foot--solid">
						<div class="kt-form__actions">
							<div class="row">
								<div class="col-12">
									<button type="submit" class="btn btn-brand">Сохранить</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!--end::Form-->

			</div>
		</div>
	</div>
</div>

@endsection