  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE NAVEGACION</li>
        <li class="treeview">
        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Medicamentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Route('medicamentos.create')}}"><i class="fa fa-circle-o"></i> Crear Medicamentos</a></li>
            <li><a href="{{Route('medicamentos.index')}}"><i class="fa fa-circle-o"></i> Listar Medicamentos</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>