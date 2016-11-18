   <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="usuarios/<?php echo $_SESSION['foto']?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p><?php echo $_SESSION['nombre']?></p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
              
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
              <li class="header">SUPER ADMNISTRADOR</li>
                              <li>
                  <a href="usuarios.php">
                    <i class="fa fa-sitemap"></i> <span>Usuarios</span>
                    <small class="label pull-right bg-red"></small>
                  </a>
                </li>
                            <li>
                  <a href="intro.php">
                    <i class="fa fa-sitemap"></i> <span>Intro Slide</span>
                    <small class="label pull-right bg-red"></small>
                  </a>
                </li>
                
          
                
                <li>
                  <a href="agencias.php">
                    <i class="fa fa-sitemap"></i> <span>Noticias</span>
                    <small class="label pull-right bg-red"></small>
                  </a>
                </li>
                <li>
                  <a href="agencias.php">
                    <i class="fa fa-sitemap"></i> <span>Podcasts</span>
                    <small class="label pull-right bg-red"></small>
                  </a>
                </li>
                <li>
                  <a href="agencias.php">
                    <i class="fa fa-sitemap"></i> <span>Preguntas</span>
                    <small class="label pull-right bg-red"></small>
                  </a>
                </li>
                 <li>
                  <a href="agencias.php">
                    <i class="fa fa-sitemap"></i> <span>Tracks</span>
                    <small class="label pull-right bg-red"></small>
                  </a>
                </li>
                    <li class="header">DATOS GENERALES</li>
                 <li>
                  
                <li class="header">OPCIONES DE LA APP</li>
                
                
                
                   
              </ul>
            </section>
            <!-- /.sidebar -->