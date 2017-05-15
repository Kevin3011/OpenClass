<head>
  <title>OpenClass Projects</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="http://localhost/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="http://localhost/assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/assets/css/theme/yellow.css">
  
  <script src="http://localhost/assets/tinymce/js/tinymce/tinymce.min.js"></script>
  <script>


      
      tinymce.init({
      selector: 'textarea#box',
      forced_root_block: "",
      width: '100%',
 
      height: 200,
      menubar : false,
      plugins: [
      'emoticons textcolor colorpicker textpattern paste'
      ],
      toolbar1: ' undo redo | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent |',
      toolbar2: 'forecolor backcolor emoticons',
      fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
      
      content_css : ['widget/template.css']
      
    });

  </script>


</head>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
      <div class="dropdown-background">
        <div class="bg"></div>
      </div>
      <div class="dropdown-container">
        {{list}}
      </div>
  </script>
  