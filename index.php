<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
</head>

<body>
   
    <?php include '/xamp/htdocs/fbclone/navbar.php' ;?>
    <div class="container">
        <h1 class="title">Create a new account</h1>
        <p class="stitle">it's quick and easy.</p>
        <form action="handlesignup.php" method="post" class="detail">
            <label for="name"></label>
            <input class="in" type="text" id="name" name="name" placeholder="First Name">
            <label for="lname"></label>
            <input class="in" type="text" id="lname" name="lname" placeholder="Last Name">
            <label for="email"></label>
            <input class="ine" type="email" name="email" id="email" placeholder="Email Or Phone Number">
            <label for="password"></label>
            <input class="inp" type="password" name="pass" id="pass" placeholder="New Password">
            <label class="dt" for="dob">Date Of Birth</label>
            <input class="in" id="dob" name="dob" type="date" value="2021-07-13" />
            <p class="gn">Gender</p>
            <label class="ing" for="gender">male</label>
            <input class="ing" type="radio" id="male" name="gender" value="male">
            <label for="gender">female</label>
            <input class="ing" type="radio" id="female" name="gender" value="female">
            <label for="gender">Transgender</label>
            <input class="ing" type="radio" id="trans" name="gender" value="trans">
            <p id="des" >By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
            <button class="bt" type="submit">Sign Up</button>
        </form>

    </div>

    <img src="sc.png" style="justify-content: center; display:flex" alt="image comes here">

</body>

</html>