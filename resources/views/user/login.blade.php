<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login | Investindo</title>
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>

  <div class="row">
    <div id="conteudo-view" class="col-md-3 login"  >
  
      <h1>Investindo!</h1>
      <span>Seu sistema para gerenciamento de investimetos!</span>
      <p>Acesse o sistema</p>

      <div class="form-group">
        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
          <div id="login" >
            <label>
              <span>Login</span>
              {!! Form::text('username', null, ['class' => 'input form-control', 'placeholder'=> 'Digite seu nome de usuario' ])!!}
            </label>
            
          </div>
        
          <div id="password">
            <label>
              <span>Senha</span>
              {!! Form::password('username', [ 'class' => 'input form-control', 'placeholder'=> 'Digite sua senha' ])!!}
            </label>
            
          </div>
      
        <div class="botoes">
          {!! Form::submit('Entrar' , [ 'class' => 'btn btn-default btn-lg'])!!}
          {!! Form::submit('Cadastrar' , [ 'class' => 'btn btn-default btn-lg'])!!}
        </div>
  

  
        {!! Form::close() !!}

      </div>

      <a href="https://laravel.com/docs" style="color: black">Esqueci minha senha</a>
        
    </div>

    <div id="painel-login" class="col-9">
      <img src="../images/Savings-amico.svg" width="80%" alt="">
    </div>
    
  </div>
  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>