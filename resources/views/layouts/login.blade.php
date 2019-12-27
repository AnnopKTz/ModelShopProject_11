<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>"WELCOME</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    /* ________________________________LOGIN_______________________________________ */
    .card {
      width: 80%;
      margin-top: 8%;
      margin-bottom: 5%;
      margin-left: 10%;
      height: 60%;
      border-radius: 20px;
      border: none;
      box-shadow: 5px 5px 5px #999999;
      background: linear-gradient(to bottom, #DBE6F6 0%, #C5796D 100%);
    }
    .card-body {
      display: flex;
    }
    .right {
      text-align: center;
      color: white;
    }
    .user-login {
      width: 17%;
    }
    .logo {
      width: 80%;
      padding-left: 15%;
    }
    .welcome {
      font-size: 35px;
      font-weight: bold;
      color: #2a4d69;
    }
    .btn {
      
      font-size: larger;
    }
  </style>
</head>

<body class="login" >
  <div class="card">
    <div class="card-body" id="card1">
      <div class="left">
        <img class="logo" src="image/002.png">
      </div>
      <div class="right">
        <img class="user-login" src="image/user.png">
        <br>
        <h class="welcome">WELCOME</h>
        <br>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="InputID" aria-describedby="IDHelp" placeholder="Enter ID">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-light" src="/">Submit</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>