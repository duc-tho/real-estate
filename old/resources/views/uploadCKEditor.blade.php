<html>

<head>
     <meta charset="UTF-8">
</head>

<body>
     <script type='text/javascript'>
          window.parent.CKEDITOR.tools.callFunction(
                {!! $FuncNum !!},
                '{!! $data['url'] !!}'
            );
     </script>
</body>

</html>
