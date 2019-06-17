<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
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
</head>

<body>
    <a href="/admin">Back</a>
    @yield('content')
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
    <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
    <script>
            var token = $('meta[name="csrf-token"]').attr("content");
            var editor = new FroalaEditor('#editor', {
              // Set the save param.
              saveParam: 'content',
          
              // Set the save URL.
              saveURL: 'http://localhost:8000/admin/blank',
              imageUploadURL: '/upload_image',
              imageUploadParams: {
                 _token: token // This passes the laravel token with the ajax request.
                 },
              // HTTP request type.
              saveMethod: 'POST',
          
              // Additional save params.
              saveParams: {_token: token},
          
              events: {
                'save.before': function () {
                  // Before save request is made.
                },
                'image.uploaded': function (response) {
                  console.log(response[0].link);
                var img_url = response.link ;
                //editor.image.insert(img_url, true);
                },
                'save.after': function () {
                  // After successfully save request.
                },
          
                'save.error': function () {
                  // Do something here.
                }
              }
            });
          </script>
          <script>
             
            document.querySelector('#saveButton').addEventListener("click", function () {
              editor.save.save();
            })
              </script>
</body>

</html>