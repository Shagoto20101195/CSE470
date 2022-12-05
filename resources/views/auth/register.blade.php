<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Graine - Register</title>
</head>
<body>
    <div class="w3-container w3-lime w3-center" style="height:200px;">
        <h1>Graine</h1>
        <p>Graine is a web application that allows you to buy or sell groceries through wide across</p>
    </div>
    <div class="w3-container w3-white w3-padding-large" style="height:300px;">
        <div class="w3-container w3-lime">
            <h4>Register</h4>
        </div>
          
          <form class="w3-container" method="GET" action="/">
            @csrf
            <p>
                <label>Email</label> <!-- action = to where after posting -->
                <input class="w3-input" type="text" name="email" placeholder="Enter your email" required autocomplete="email" autofocus>
            </p>
            <p>
                <label>Password</label>
                <input class="w3-input" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
            </p>
            <p>
                <button type="submit" class="w3-button w3-lime">Register</button>
            </p>
          </form>
          
    </div>

    <div class="w3-container w3-lime w3-center" style="height:100px;">
            <i>&copy; Andalib Rahman Shagoto</i>
    </div>

</body>
</html>