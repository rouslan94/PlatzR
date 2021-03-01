<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact</h1>
    <form action="/login" method='POST'>
    
    <label for="titre">username</label> <br/>
    <input type="text" name="username"> <br/>
     @if($errors->has('username'))
    <p>{{$errors->first('username')}}</p>
     @endif
    <label for="titre">email</label> <br/>
    <input type="text" name="email"> <br/>
    @if($errors->has('email'))
    <p>{{$errors->first('email')}}</p>
     @endif
    <label for="titre">mot de passe</label> <br/>
    <input type="password" name="password"> <br/>
    @if($errors->has('password'))
    <p>{{$errors->first('password')}}</p>
     @endif
    <label for="titre">confirm mot de passe</label> <br/>
    <input type="password" name="password_confirmation"><br/>
    @if($errors->has('password_confirmation'))
    <p>{{$errors->first('password_confirmation')}}</p>
     @endif
    <button type="submit">send</button>
    </form>
</body>
</html>