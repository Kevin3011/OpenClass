 <div class="row">
          <?php
          if(isset($_GET['c'])){
              include_once('pages/classList.php');
          }else{
              include_once('pages/classCategory.php');  
          }

          ?>

      </div>

      <div class="btn-floating" id="help-actions">
        <div class="btn-bg"></div>
        <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
          <i class="icon fa fa-plus"></i>
          <span class="help-text">Shortcut</span>
        </button>
        <div class="toggle-content">
          <ul class="actions">
            <li><a href="http://localhost/class/add">Add Class</a></li>
          </ul>
        </div>
      </div>