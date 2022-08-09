@extends('admin.admin')

@section('content')
<div class="kt-subheader kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title">Настройки</h3>
	</div>
</div>

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="kt-portlet kt-portlet--tabs">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-toolbar">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-danger nav-tabs-line-2x nav-tabs-line-right" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#site" role="tab" aria-selected="true">
							Настройки сайта
						</a>
					</li>
				</ul>
			</div>
		</div>
		<form class="kt-form" method="post" action="/admin/setting/save" enctype="multipart/form-data">
			<div class="kt-portlet__body">
				<div class="tab-content">
					<div class="tab-pane active" id="site" role="tabpanel">
						<div class="kt-section">
							@csrf
							<h3 class="kt-section__title">
								Общие настройки:
							</h3>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Технические работы:</label>
									<select class="form-control" name="teh_work">
										<option value="0" {{ ($settings->teh_works == 0) ? 'selected' : '' }}>Выключены</option>
										<option value="1" {{ ($settings->teh_works == 1) ? 'selected' : '' }}>Включены</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Имя сайта:</label>
									<input type="text" class="form-control" placeholder="SiteName" value="{{$settings->name}}" name="name">
								</div>
								<div class="col-lg-4">
									<label>Лого сайта:</label>
									<input class="form-control" type="file" accept="image/*" name="img">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Телефон:</label>
									<input type="text" class="form-control" placeholder="+79323000000" value="{{$settings->phone}}" name="phone">
								</div>
								<div class="col-lg-4">
									<label>Почта:</label>
									<input type="text" class="form-control" placeholder="email@mail.ru" value="{{$settings->mail}}" name="mail">
								</div>
								<div class="col-lg-4">
									<label>Адрес:</label>
									<input type="text" class="form-control" placeholder="Адрес 94а" value="{{$settings->address}}" name="address">
								</div>
							</div>
						</div>

						
						
					</div>


				</div>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Сохранить</button>
					<button type="reset" class="btn btn-secondary">Сбросить</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection