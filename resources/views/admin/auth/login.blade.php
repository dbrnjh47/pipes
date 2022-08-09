@extends('admin.auth.layout_auth')
@section('content')
<title>Авторизация</title>
<body class="dark-theme">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
          <div class="row d-flex align-items-stretch">
            <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
              <div class="slide-content bg-1"> </div>
            </div>
            <div class="col-12 col-md-8 h-100 card">
              <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">

                <div class="nav-get-started">
                  <p>У вас нет аккаунта?</p>
                  <a class="btn get-started-btn" href="/">Главная</a>
                </div>
                <form action="#" id="login">
                  <h3 class="mr-auto">Привет! Давайте начнем</h3>
                  <p class="mb-5 mr-auto">Введите свои данные ниже.</p>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-outline"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Логин" name="login">
                    </div>
                    <label class="error mt-2 text-danger">This field is required.</label>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-lock-outline"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Пароль" name="password">
                    </div>
                    <label class="error mt-2 text-danger">This field is required.</label>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn" type="button">Войти</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <style>
    .error {
      display: none;
    }
  </style>
  <script>
    $("#login .btn-primary.submit-btn").on('click', function() {
      $('#login .error').fadeOut(300);
      $.ajax({
        url: '/login',
        type: "POST",
        data: {
          'login': $('#login input[name="login"]').val(),
          'password': $('#login input[name="password"]').val(),
        },
        success: function(data) {
          window.location.href = '/admin';
        },
        error: function(msg) {
          var errors = msg.responseJSON;
          errors = errors["errors"];
          console.log(errors);

          for (var key in errors) {
            $('#login input[name="'+key+'"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
          }
        }
      });
    });
  </script>
  
</body>
@endsection