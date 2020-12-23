<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SBCE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">PROFILE</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="aboutus.php">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="register.php">REGISTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="images.php">IMAGES</a>
              </li>
           </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <table class="table">
                    <h1>REGISTER</h1>
                    <tr>
                     <td>Name</td>
                     <td><input type="text" class="form-control"></td>
                 </tr>
              <tr>
                  <td>Address</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Place</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Mobile number</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Email id</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>User name</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Password</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Confirm password</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td></td>
                  <td><button class="btn btn-success">Register</button></td>
              </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
        </div>
    </div>
</body>
</html>