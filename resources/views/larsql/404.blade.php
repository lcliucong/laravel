<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>抱歉~页面丢失啦!</title>
  <link href="{{URL::asset("static/css/css.css")}}" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('static/css/normalize.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset("static/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{URL::asset("static/css/style.css")}}">
  <link rel="stylesheet" href="{{URL::asset("static/css/reveal.css")}}">
</head>
<body>
  <div class="radio-wrapper">
    <audio id="audio">
{{--        音频引入--}}
    </audio>
    <div class="svgs">
      <svg class="svg-icon s" viewbox="0 0 20 20" id="son">
        <path d="M17.969,10c0,1.707-0.5,3.366-1.446,4.802c-0.076,0.115-0.203,0.179-0.333,0.179c-0.075,0-0.151-0.022-0.219-0.065c-0.184-0.122-0.233-0.369-0.113-0.553c0.86-1.302,1.314-2.812,1.314-4.362s-0.454-3.058-1.314-4.363c-0.12-0.183-0.07-0.43,0.113-0.552c0.186-0.12,0.432-0.07,0.552,0.114C17.469,6.633,17.969,8.293,17.969,10 M15.938,10c0,1.165-0.305,2.319-0.88,3.339c-0.074,0.129-0.21,0.201-0.347,0.201c-0.068,0-0.134-0.016-0.197-0.052c-0.191-0.107-0.259-0.351-0.149-0.542c0.508-0.9,0.776-1.918,0.776-2.946c0-1.028-0.269-2.046-0.776-2.946c-0.109-0.191-0.042-0.434,0.149-0.542c0.193-0.109,0.436-0.042,0.544,0.149C15.634,7.681,15.938,8.834,15.938,10 M13.91,10c0,0.629-0.119,1.237-0.354,1.811c-0.063,0.153-0.211,0.247-0.368,0.247c-0.05,0-0.102-0.01-0.151-0.029c-0.203-0.084-0.301-0.317-0.217-0.521c0.194-0.476,0.294-0.984,0.294-1.508s-0.1-1.032-0.294-1.508c-0.084-0.203,0.014-0.437,0.217-0.52c0.203-0.084,0.437,0.014,0.52,0.217C13.791,8.763,13.91,9.373,13.91,10 M11.594,3.227v13.546c0,0.161-0.098,0.307-0.245,0.368c-0.05,0.021-0.102,0.03-0.153,0.03c-0.104,0-0.205-0.04-0.281-0.117l-3.669-3.668H2.43c-0.219,0-0.398-0.18-0.398-0.398V7.012c0-0.219,0.179-0.398,0.398-0.398h4.815l3.669-3.668c0.114-0.115,0.285-0.149,0.435-0.087C11.496,2.92,11.594,3.065,11.594,3.227 M7.012,7.41H2.828v5.18h4.184V7.41z M10.797,4.189L7.809,7.177v5.646l2.988,2.988V4.189z"></path>
      </svg>
      <svg class="svg-icon" viewbox="0 0 20 20" id="soff">
        <path d="M18.084,11.639c0.168,0.169,0.168,0.442,0,0.611c-0.084,0.084-0.195,0.127-0.306,0.127c-0.111,0-0.221-0.043-0.306-0.127l-1.639-1.639l-1.639,1.639c-0.084,0.084-0.195,0.127-0.306,0.127c-0.111,0-0.222-0.043-0.307-0.127c-0.168-0.169-0.168-0.442,0-0.611L15.223,10l-1.64-1.639c-0.168-0.168-0.168-0.442,0-0.61c0.17-0.169,0.442-0.169,0.612,0l1.639,1.639l1.639-1.639c0.169-0.169,0.442-0.169,0.611,0c0.168,0.168,0.168,0.442,0,0.61L16.445,10L18.084,11.639z M12.161,2.654v14.691c0,0.175-0.105,0.333-0.267,0.4c-0.054,0.021-0.109,0.032-0.166,0.032c-0.111,0-0.223-0.043-0.305-0.127l-3.979-3.979H2.222c-0.237,0-0.432-0.194-0.432-0.432V6.759c0-0.237,0.195-0.432,0.432-0.432h5.222l3.979-3.978c0.123-0.125,0.309-0.163,0.471-0.095C12.056,2.322,12.161,2.479,12.161,2.654 M7.192,7.192H2.654v5.617h4.538V7.192z M11.296,3.698l-3.24,3.241v6.123l3.24,3.24V3.698z"></path>
      </svg>
    </div>
    <div class="shadows">
      <div class="shadow-1" id="shadow"></div>
      <div class="shadow-2"></div>
    </div>
    <div class="radio" id="radio">
      <div class="bf">
        <div class="bf__front face"> </div>
        <div class="bf__back face"> </div>
        <div class="bf__right face"> </div>
        <div class="bf__left face"> </div>
        <div class="bf__top face"> </div>
        <div class="bf__bottom face"> </div>
      </div>
      <div class="ffa">
        <div class="ffa__front face">
          <div class="ffa__front-circles" id="circles"></div>
        </div>
        <div class="ffa__right face">
          <div class="range">
            <div class="range__front face"> </div>
            <div class="range__back face"> </div>
            <div class="range__right face"> </div>
            <div class="range__left face"> </div>
            <div class="range__top face"> </div>
            <div class="range__bottom face"></div>
          </div>
        </div>
        <div class="ffa__left face"> </div>
        <div class="ffa__top face"> </div>
        <div class="ffa__bottom face"> </div>
      </div>
      <div class="ffb">
        <div class="ffb__front face"> </div>
        <div class="ffb__right face"> </div>
        <div class="ffb__left face"> </div>
        <div class="ffb__top face"> </div>
        <div class="ffb__bottom face"> </div>
      </div>
      <div class="ffc">
        <div class="ffc__front face"> </div>
        <div class="ffc__right face"> </div>
        <div class="ffc__left face"> </div>
        <div class="ffc__top face"> </div>
        <div class="ffc__bottom face"> </div>
      </div>
      <div class="ffd">
        <div class="ffd__front face"> </div>
        <div class="ffd__right face"> </div>
        <div class="ffd__left face"> </div>
        <div class="ffd__top face"> </div>
        <div class="ffd__bottom face"></div>
      </div>
      <div class="buttons">
        <div class="button">
          <div class="button__front face"> </div>
          <div class="button__back face"> </div>
          <div class="button__right face"> </div>
          <div class="button__left face"> </div>
          <div class="button__top face"> </div>
          <div class="button__bottom face"></div>
        </div>
        <div class="button">
          <div class="button__front face"> </div>
          <div class="button__back face"> </div>
          <div class="button__right face"> </div>
          <div class="button__left face"> </div>
          <div class="button__top face"> </div>
          <div class="button__bottom face"></div>
        </div>
        <div class="button">
          <div class="button__front face"> </div>
          <div class="button__back face"> </div>
          <div class="button__right face"> </div>
          <div class="button__left face"> </div>
          <div class="button__top face"> </div>
          <div class="button__bottom face"></div>
        </div>
        <div class="button button--cta" id="button-cta">
          <div class="button__front face"> </div>
          <div class="button__back face"> </div>
          <div class="button__right face"> </div>
          <div class="button__left face"> </div>
          <div class="button__top face"> </div>
          <div class="button__bottom face"></div>
        </div>
      </div>
      <div class="cover" id="cover">
        <div class="cover-b">
          <div class="cover-b__front face"> </div>
          <div class="cover-b__right face"> </div>
          <div class="cover-b__left face"> </div>
          <div class="cover-b__top face"> </div>
          <div class="cover-b__bottom face"></div>
        </div>
      </div>
      <div class="cassete">
        <div class="cassete__front face">
          <div class="cassete__line"></div>
        </div>
        <div class="cassete__back face"> </div>
        <div class="cassete__right face"> </div>
        <div class="cassete__left face"> </div>
        <div class="cassete__top face"> </div>
        <div class="cassete__bottom face"></div>
      </div>
    </div>
  </div>

  <header>
    <a href="javascript:;">
      <img class="logo" src="{{URL::asset("static/picture/logo.png")}}">
    </a>
    <span class="btn-menu"><img src="{{URL::asset("static/picture/menu.svg")}}"></span>
  </header>

  <div class="content">
    <h1>404</h1>
    <a class="btn" href="{{route('test.info')}}">
      返回主页
    </a>
  </div>

  <nav class="menu col-xs-12 col-sm-6 block-revealer">
    <div class="revealer-content">
      <span class="btn-close"><img src="{{URL::asset("static/picture/close.svg")}}"></span>
      <ul class="menu-inner">
        <li class="menu-item"><a class="menu-link" href="{{route('test.info')}}">Home</a></li>
        <li class="menu-item"><a class="menu-link" href="javascript:;">Work</a></li>
        <li class="menu-item"><a class="menu-link" href="javascript:;">About</a></li>
        <li class="menu-item"><a class="menu-link" href="javascript:;">Contact</a></li>
      </ul>
    </div>
    <div class="revealer-animation"></div>
  </nav>

  <script src="{{URL::asset('static/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('static/js/anime.min.js')}}"></script>
  <script src="{{URL::asset('static/js/reveal.js')}}"></script>
  <script src="{{URL::asset('static/js/radio.js')}}"></script>
</body>
</html>