@extends('layout_auth')
@section('content')
<title>Регистрация</title>

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
            <div class="nav-get-started nav-get-started_logo">
                <a class="navbar-brand brand-logo" href="/">
                    <img src="/temple/pc/imgs/logo_dark.svg" alt="логотип"> </a>
                </div>
            <div class="nav-get-started">
                <p>У вас уже есть аккаунт?</p>
                <a class="btn get-started-btn" href="/login">ВОЙТИ</a>
              </div>
              <form action="#" id="signup">
                <h3 class="mr-auto">Регистрация</h3>
                <p class="mb-5 mr-auto">Введите свои данные ниже.</p>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="mdi mdi-account-outline"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Логин пользователя" name="login">
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
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="mdi mdi-lock-outline"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Подтвердите пароль" name="password_confirmation">
                  </div>
                  <label class="error mt-2 text-danger">This field is required.</label>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn" type="button">Зарегистрироваться</button>
                </div>
                <div class="wrapper mt-5 text-gray">
                  <p class="footer-text">Copyright ©{{date("Y")}}. Все права защищены.</p>
                  <ul class="auth-footer text-gray">
                    <li>
                      <a href="#">Соглашение</a>
                    </li>
                    <li>
                      <a href="#">Политика конфиденциальности</a>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    .error {
      display: none;
    }
  </style>
  <script>
    $("#signup .btn-primary.submit-btn").on('click', function() {
      $('#signup .error').fadeOut(300);
      $.ajax({
        url: '/api/signup',
        type: "POST",
        data: {
          'login': $('#signup input[name="login"]').val(),
          'password': $('#signup input[name="password"]').val(),
          'password_confirmation': $('#signup input[name="password_confirmation"]').val(),

        },
        success: function(data) {
          window.location.href = '/';
        },
        error: function(msg) {
          var errors = msg.responseJSON;
          errors = errors["errors"];
          console.log(errors);

          for (var key in errors) {
            $('#signup input[name="'+key+'"]').closest('.form-group').children('.error.text-danger').text(errors[key][0]).fadeIn(200);
          }
        }
      });
    });
  </script>
</body>
@endsection