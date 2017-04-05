<?php
    if(!isset($isLogin)){
      session_start();
      if(!isset($_SESSION['id_user'])){
          header("Location: http://localhost/openclass/users/login");
      }
      session_abort();
    }
?>


<head>
  <title>OpenClass Projects</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="http://localhost/openclass/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/openclass/assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="http://localhost/openclass/assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/openclass/assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/openclass/assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/openclass/assets/css/theme/yellow.css">

</head>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
      <div class="dropdown-background">
        <div class="bg"></div>
      </div>
      <div class="dropdown-container">
        {{list}}
      </div>
  </script>