<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
<div class="user-panel">
        
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><?php echo $_SESSION['email'] ?></li>
        <li class="active treeview">
     <li>
          <a href="adminindex.php">
            <i class="fa fa-th"></i> <span>Accueil</span>
            
          </a>
        </li>
        <li>
          <a href="categories.php">
            <i class="fa fa-th"></i> <span>Categories</span>
            
          </a>
        </li>
         <li>
          <a href="productsshow.php">
            <i class="fa fa-th"></i> <span>Produits</span>
            
          </a>
        </li>
        <li>
          <a href="orders.php">
            <i class="fa fa-th"></i> <span>Commandes</span>
            
          </a>
        </li>
        
        
        <li>
          <a href="adminpartials/logout.php">
            <i class="fa fa-th"></i> <span>Deconnexion</span>
            
          </a>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>