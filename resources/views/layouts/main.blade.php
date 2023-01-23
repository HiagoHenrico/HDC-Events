<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Deuses Hindus')</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.css" integrity="sha512-Ty5JVU2Gi9x9IdqyHN0ykhPakXQuXgGY5ZzmhgZJapf3CpmQgbuhGxmI4tsc8YaXM+kibfrZ+CNX4fur14XNRg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- JavaScript -->
    <script src="/js/main.js"></script>
    <!-- IonIcons -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
              <img src="/img/hdcevents_logo.png" alt="HDC Events">
          </a>
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="/" class="nav-link">Eventos</a>
              </li>
              <li class="nav-item">
                  <a href="/events/create" class="nav-link">Criar Eventos</a>
              </li>
              @auth 
              <li class="nav-item">
                  <a href="/dashboard" class="nav-link">Meus eventos</a>
              </li>
              <li class="nav-item">
                  <form action="/logout" method="POST">
                      @csrf
                      <a href="/login"
                         class="nav-link"
                         onclick="event.preventDefault();
                         this.closest('form').submit();">
                         Sair
                      </a>
                  </form>
              </li>
              @endauth
              @guest
              <li class="nav-item">
                  <a href="/login" class="nav-link">Entrar</a>
              </li>
              <li class="nav-item">
                  <a href="/register" class="nav-link">Cadastrar</a>
              </li>
              @endguest
          </ul>
      </div>
  </nav>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
              <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
</main>
<footer>
    <p>HDC Events &copy; 2022</p>
</footer>
</body>
</html>