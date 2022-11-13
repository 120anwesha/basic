<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="main">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="https://www.lstream.org/wp-content/uploads/cropped-ALLWHITELifeStream-Blood-Bank-Logo-Stacked-Rev.png "alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Campaign.php">Campaign</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="donate.php">Donate</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="needblood.php">Need Blood</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="content">
            <h1>Donate the blood to save life</h1>
            <p class="para">The blood supply is a critical part of our heathcare system.<br> It is imperative for healthy individuals to come in and donate <br> blood so that it's available to those in need.At this unprecedented time,<br> this is one thing you can do to help somone who desperately needs it.</p>

            <button class="cn"><a href="https://en.wikipedia.org/wiki/Blood_bank">Read More</a> </button>
            </div>

            <div class="container">
              <div class="row">
                <div class="col order-last">
                  <div class="register">
                    <h2>Login Here</h2>
                    <form id="register" method="post">
                      <label>Username :</label>
                      <br>
                      <input type="text" name="fname" id="username" placeholder="username" required="">
                      <br><br>
                      <label>Password :</label>
                      <br>
                      <input type="text" name="fname" id="password" placeholder="password" required="">
                      <br><br>
                      <button class="submitbtn"><a href="#">LOG IN</a></button>
                     <!-- <input type="submit" value="submit" name="submit" id="submit">-->
                    </form>
                  </div>
                </div>
                <div class="col">
                  
                </div>
                <div class="col order-first">
                  
                </div>
              </div>
            </div>

    </div>
</body>
</html>