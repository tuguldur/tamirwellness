<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
    @if (Request::is('admin/service'))
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/editor/froala_editor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/froala_style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/code_view.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/draggable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/colors.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/emoticons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/image_manager.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/image.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/line_breaker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/table.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/char_counter.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/video.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/fullscreen.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/file.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/quick_insert.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/help.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/third_party/spell_checker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editor/plugins/special_characters.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    @endif
  </head>

  <body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
          <a href="/" class="simple-text logo-normal ml-3">
            {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
              <a href="{{ url('/admin') }}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="{{ Request::is('admin/book') ? 'active' : '' }}">
              <a href="{{ url('/admin/book')}}">
                <i class="nc-icon nc-bell-55"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="{{ Request::is('admin/home') ? 'active' : '' }}">
                <a href="{{url('/admin/home')}}">
                <i class="nc-icon nc-image"></i>
                <p>Home</p>
              </a>
            </li>
            <li class="{{ Request::is('admin/comment') ? 'active' : '' }}">
              <a href="{{url('/admin/comment')}}">
                <i class="nc-icon nc-paper"></i>
                <p>Comment</p>
              </a>
            </li>
            <li class="{{ Request::is('admin/contact') ? 'active' : '' }}">
                <a href="{{url('/admin/contact')}}">
                  <i class="nc-icon nc-book-bookmark"></i>
                  <p>Contact</p>
                </a>
              </li>
              <li class="{{ Request::is('admin/blank') ? 'active' : '' }}">
                <a href="{{url('/admin/blank')}}">
                  <i class="nc-icon nc-app"></i>
                  <p>Blank</p>
                </a>
              </li> <li class="{{ Request::is('admin/service') ? 'active' : '' }}">
                <a href="{{url('/admin/service')}}">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>Service</p>
                </a>
              </li>
            </li> <li class="{{ Request::is('admin/user') ? 'active' : '' }}">
              <a href="{{url('/admin/user')}}">
                <i class="nc-icon nc-user-run"></i>
                <p>Users</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent"
        >
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navigation"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navigation"
            >
              <ul class="navbar-nav">
                <li class="nav-item btn-rotate dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="nc-icon nc-settings-gear-65"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Actions</span>
                    </p>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  > 
                  <a class="dropdown-item" href="{{url('/admin/profile')}}">
                    Profile
                 </a>
                  <a class="dropdown-item last-child" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
                 </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar End -->
        <!-- Content -->
        @yield('content')
        <!-- Content End -->
    </div> 
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
<script src="{{Request::is('admin/book') ? asset('assets/js/book.js'): ''}}"></script>
<script src="{{Request::is('admin/comment') ? asset('assets/js/comment.js'): ''}}"></script>
<script src="{{Request::is('admin/comment') ? asset('assets/js/comment_header.js'): ''}}"></script>
<script src="{{Request::is('admin/contact') ? asset('assets/js/contact.js'): ''}}"></script>
<script src="{{Request::is('admin/home') ? asset('assets/js/home_header.js'): ''}}"></script>
<script src="{{Request::is('admin/user') ? asset('assets/js/users.js'): ''}}"></script>
<script src="{{Request::is('admin/profile') ? asset('assets/js/profile.js'): ''}}"></script>
@if (Request::is('admin/service'))
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/froala_editor.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/align.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/char_counter.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/code_beautifier.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/code_view.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/colors.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/draggable.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/emoticons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/entities.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/file.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/font_size.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/font_family.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/fullscreen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/image.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/image_manager.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/line_breaker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/inline_style.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/link.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/lists.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/paragraph_format.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/paragraph_style.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/quick_insert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/quote.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/table.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/save.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/url.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/help.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/third_party/spell_checker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/special_characters.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/editor/plugins/word_paste.min.js')}}"></script>
<script>
  var token = $('meta[name="csrf-token"]').attr("content");
  var editor = new FroalaEditor('textarea#editor,textarea#editor_mn', {
              videoUploadParam: 'file',
              videoUploadURL: '/upload_video',
              videoUploadParams: {
                _token:token
                },
              videoUploadMethod: 'POST',
              // Set max video size to 50MB.
              videoMaxSize: 50 * 1024 * 1024,
              videoAllowedTypes: ['mp4', 'ogg'],

              // Image upload
              imageUploadURL: '/upload_image',
              imageUploadParams: {
                 _token: token // This passes the laravel token with the ajax request.
                 },
              saveMethod: 'POST',
            });
</script>
<script src="{{asset('assets/js/service.js')}}"></script>
@endif
</body>
</html>
