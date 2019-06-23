<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tamirwellness</title>
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" >
</head>
<body> 
     @yield('content')

    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
 <script>
var checkboxes = document.querySelectorAll('.mdc-checkbox');
for (var i = 0, checkbox; checkbox = checkboxes[i]; i++) {
  new mdc.checkbox.MDCCheckbox(checkbox);
}
var buttons = document.querySelectorAll('.mdc-button');
for (var i = 0, button; button = buttons[i]; i++) {
  mdc.ripple.MDCRipple.attachTo(button);
}

  </script>
  <script type="text/javascript">
    window.mdc.autoInit();
  </script>
</body>
</html>
