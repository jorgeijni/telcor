<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                Sistema de Clientes
            </a>
        </div>

        <nav class="nav navbar-nav ">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/home') }}">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administración <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                            <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="">Clientes</a> </li>
                                <li><a href="{{ route('clientes.index') }}">Clientes</a> </li>
                                <li><a href="{{ route('tipocliente.index') }}">Tipo de Clientes</a> </li>
                                <li><a href="{{ route('departamentos.index') }}">Departamentos</a> </li>
                                <li><a href="{{ route('municipios.index') }}">Municipios</a> </li>
                            </ul>
                        </li>
                 </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>
</nav>
