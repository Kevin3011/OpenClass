<nav class="navbar navbar-default" id="navbar">
      <div class="container-fluid">
        <div class="navbar-collapse collapse in">
          <ul class="nav navbar-nav navbar-mobile">
            <li>
              <button type="button" class="sidebar-toggle">
                <i class="fa fa-bars"></i>
              </button>
            </li>
            <li class="logo">
              <a class="navbar-brand" href="#"><span class="highlight">Open</span> Class</a>
            </li>
            <li>
              <button type="button" class="navbar-toggle">
                <img class="profile-img" src="http://localhost/openclass/assets/images/profile.png">
              </button>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-left">
            <li class="navbar-title"><?php echo $page_title;?></li>
            <li class="navbar-search hidden-sm">
              <input id="search" type="text" placeholder="Search..">
              <button class="btn-search"><i class="fa fa-search"></i></button>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown profile">
              <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                <img class="profile-img" src="http://localhost/openclass/assets/images/profile.png">
                <div class="title">Profile</div>
              </a>
              <div class="dropdown-menu">
                <div class="profile-info">
                  <h4 class="username">Kevin Adhitama</h4>
                </div>
                <ul class="action">
                  <li>
                    <a href="#">
                      Profile
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="badge badge-danger pull-right">5</span>
                      My Inbox
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Setting
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
