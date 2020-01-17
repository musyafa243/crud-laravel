<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>
<div class="login-page">
  <div class="form">
  <form class="login-form" action="/registration" method="post">
      {{@csrf_field()}}
      <input name="name" type="text" placeholder="name"/>
      <input name="email" type="text" placeholder="email"/>
      <input name="password" type="password" placeholder="password"/>
      <button>create</button>
      <p class="message">Already registered? <a href="/login">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>