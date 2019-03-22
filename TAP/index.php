<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag ---------->
<style type="text/css">
	body {
  margin: 0;
  padding: 0;
  background-color: #66BB6A;
  background: url('https://images.unsplash.com/photo-1507103011901-e954d6ec0988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');
  background-size: cover;
  background-repeat: no-repeat;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 700px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #E8F5E9;
  opacity: .9;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
<body>
    <div id="login">
        <h2 class="text-center text-white pt-5">
          <span style="color: green; font-size: 50px; font-weight: bolder;">EGERTON</span>  Dairy  Management System</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="Login/login.php" method="post">
                            <h3 class="text-center text-info">Login</h3>

                            <div class="form-group">
                                <label for="username" class="text-info">Employee Id:</label><br>
                                <input type="text" name="ID" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="login" class="btn btn-info btn-md form-control" value="submit" >
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
