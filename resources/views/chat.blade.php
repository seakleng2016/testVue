<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
  </head>
  <body>
    <div id="app">
      <h1>Chatroom</h1>
      <chat-log></chat-log>
      <chat-composer></chat-composer>
    </div>

    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
