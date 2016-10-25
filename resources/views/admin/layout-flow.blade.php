<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Highlander Bros.">

  <title>{{ !empty($page->title) ? $page->title : 'Admin - Mandacaru Carnes' }}</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('/assets-admin/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- CSS -->
  <link href="{{ asset('/assets-admin/css/main.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href="{{ asset('/assets-admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  @yield('head')
</head>
<body>
  <nav class="navbar navbar-default top-nav-collapse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Abrir/Fechar</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin::order:list') }}">Painel administrativo</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li @if ($page->name == 'order') class="active" @endif>
            <a href="{{ route('admin::order:list') }}">Pedidos</a>
          </li>
          <li @if ($page->name == 'product') class="active" @endif>
            <a href="{{ route('admin::product:list') }}">Produtos</a>
          </li>
          <li @if ($page->name == 'banner') class="active" @endif>
            <a href="{{ route('admin::banner:list') }}">Banners</a>
          </li>
          <li @if ($page->name == 'about') class="active" @endif>
            <a href="{{ route('admin::about:edit') }}">Sobre a empresa</a>
          </li>
          <li @if ($page->name == 'contact') class="active" @endif>
            <a href="{{ route('admin::contact:edit') }}">Dados da empresa</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{ route('admin::logout') }}">
              <i class="fa fa-sign-out"></i>
              Sair
            </a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  @yield('content-flow')

  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text">
        Highlander Bros. &copy; 2016
      </p>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('/assets-admin/js/jquery.js') }}"></script>
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('/assets-admin/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('/assets-admin/js/custom.js') }}"></script>
  @yield('scripts')
</body>

</html>
