  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="dropdown">
    <a href="./" class="brand-link">
     <img src="image/kids2.png" alt="Logo" class="brand-image img-circle elevation-3" 
     style="opacity: .8; width: 35px; height: 35px; border-radius: 50%; background-color: #ffffff; padding: 5px;">
     <span class="brand-text font-weight-light" style="font-size: 18px; margin-left: 10px; color: #ffffff;">Damai</span>
    </a>
      
    </div>
    <div class="sidebar ">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=evaluate" class="nav-link nav-evaluate">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                Evaluate
              </p>
            </a>
          </li> 
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
     
  	})
  </script>