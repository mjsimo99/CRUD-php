<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">my_form</a>

<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- ______________________________________________________________________ -->
<div class="affiche">
Welcome : <?php echo $_POST["Fname"];  echo str_repeat('&nbsp;', 1); echo $_POST["Lname"];?><br>
Your email address is : <?php echo $_POST["Email"]; ?><br>
your password is : <?php echo('Sorry I cant show your password for your protection'); ?>
</div>
<!-- ______________________________________________________________________ -->

<footer>
        <br>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 10v4h3v7h4v-7h3l1-4h-4V8a1 1 0 0 1 1-1h3V3h-3a5 5 0 0 0-5 5v2H7Z"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 4H8a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4Z"></path>
            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
            <path d="M16.5 7.5v.001"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 4H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z"></path>
            <path d="M8 11v5"></path>
            <path d="M8 8v.01"></path>
            <path d="M12 16v-5"></path>
            <path d="M16 16v-3a2 2 0 0 0-4 0"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m8 20 4-9"></path>
            <path
                d="M10.7 13.998c.437 1.263 1.43 2 2.55 2 2.071 0 3.75-1.554 3.75-4a4.999 4.999 0 0 0-7.864-4.104A5 5 0 0 0 7.3 13.698">
            </path>
            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 5H7a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h10a4 4 0 0 0 4-4V9a4 4 0 0 0-4-4Z"></path>
            <path d="m10 9 5 3-5 3V9Z"></path>
        </svg>




        <p>© 2022 Foody All Rights Reserved. Terms of Use, Privacy Policy and Foody Cookies Policy<br><br></p>
    </footer>
</body>
</html>
