<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Contact</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet" />
</head>

<body class="sub_page">
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>

            </div>
            <form action="{{ route('seedemail') }}" method="POST">
            @csrf
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
              <div>
                <input type="text" name="name" placeholder="Họ và tên" />
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div>
                <input type="text" name="subject" placeholder="Tiêu đề" />
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Nội dung" />
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="d-flex ">
                <button>
                  GỬI
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>





  <script type="text/javascript" src="{{ asset('asset/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('asset/js/bootstrap.js') }}"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

</body>
