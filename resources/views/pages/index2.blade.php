<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .container{
        font-family: 'Jost', sans-serif;
      }
      .slide-text{
        font-family: 'Playfair Display', serif;
      }
    </style>

    @include('../layout.header')
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
      @include('pages.layout.navbar')

      @include('pages.layout.detail')

      @include('../layout.footer')
    </div>

  </body>
</html>
