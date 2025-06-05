<div class="container col-6 offset-sm-3">
 <h1 class="header-h1">LogIn</h1>
     <form method="POST" action='handler/login_handler.php'>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"  name="password"class="form-control" id="password">
  </div>
  
  <button type="submit" class="btn btn-primary submit">LogIn</button>
</form>
</div>