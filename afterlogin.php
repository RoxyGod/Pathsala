<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styling.css">
  <link rel="stylesheet" text="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

  <title>Khulla Pathsala </title>
</head>


<body>
  <style>
    body {

      background-image: url("image/home-bg.jpg");

      align-items: center;
      justify-content: center;
      background-size: cover;
      background-position: center;
    }

    .ptext {
      position: absolute;
      top: 40%;
      width: 100%;
      text-align: center;
      color: #000;
      font-size: 30px;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .ptext {
      background: transparent;
      color: black;
      padding: 20px;
    }
  </style>

  <header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
      <!--nav bar starts-->
    <nav style="background-color: rgb(136, 133, 131);" class="navbar sticky-top navbar-expand-lg navbar-light" id="navstick">
      <div class="container-fluid">
        <a href="Home.php"><img src="image/lgo.jpg" id="logoimg"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="float: right;margin-right: 50px;">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li id="ab" class="nav-item">
                <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
              </li>
              <li id="ab" class="nav-item">
                <a class="nav-link " href="About Us.php">About</a>
              </li>
              <li id="ab" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li id="ab"><a class="dropdown-item" href="login.php">Login</a></li>
                  <li id="ab"><a class="dropdown-item" href="SignUP.php">Signup</a></li>



                </ul>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </nav>
     <!--nav bar ends-->