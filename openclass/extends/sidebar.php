  <aside class="app-sidebar" id="sidebar">
      <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">Open</span> Class</a>
        <button type="button" class="sidebar-toggle">
          <i class="fa fa-times"></i>
        </button>
      </div>
      <div class="sidebar-menu">
        <ul class="sidebar-nav">
          <li <?php if($current == "Home") echo "class='active'"; ?>>
            <a href="http://localhost/home">
              <div class="icon">
                <i class="fa fa-tasks" aria-hidden="true"></i>
              </div>
              <div class="title">Home</div>
            </a>
          </li>
          <li <?php if($current == "MyClass") echo "class='active'"; ?>>
            <a href="http://localhost/myclass">
              <div class="icon">
                <i class="fa fa-comments" aria-hidden="true"></i>
              </div>
              <div class="title">My Class</div>
            </a>
          </li>
          <li <?php if($current == "myclass") echo "class='active'"; ?>>
            <a href="http://localhost/myclass">
              <div class="icon">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <div class="title">Message</div>
            </a>
          </li>
          
        </ul>
      </div>
      <div class="sidebar-footer">
        <ul class="menu">
          <li>
            <a href="/" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cogs" aria-hidden="true"></i>
            </a>
          </li>
          <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
        </ul>
      </div>
    </aside>
