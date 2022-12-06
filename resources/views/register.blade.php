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
        <h1><b>Graine</b></h1>
        <br><br>
        <h3><i>Graine is a web application that allows you to buy or sell groceries through wide across</i></h3>
    </div>
    <div class="w3-container w3-white w3-padding-large" style="height:550px;">
        <div class="w3-container w3-lime">
            <h4>Register Now on Graine Today!</h4>
        </div>
          
          <form class="w3-container" method="POST" action="/">
            @csrf
            <p>
                <label>Register As:</label>
                <input class="w3-radio" type="radio" name="user" value="buyer" required>
                <label>Buyer</label>
                <input class="w3-radio" type="radio" name="user" value="seller" required>
                <label>Seller</label>
                  
            </p>
            <p>
                <label>Email</label> <!-- action = to where after posting -->
                <input class="w3-input" type="text" name="email" placeholder="Enter your email" required>
            </p>
            <p>
                <label>Password</label>
                <input class="w3-input" type="password" name="password" placeholder="Enter your password" required>
            </p>
            <p>
                <label>Phone Number</label>
                <input class="w3-input" type="text" name="number" placeholder="Enter your number" required>
            </p>
            <p>
                <label>Address</label>
                <input class="w3-input" type="text" name="address" placeholder="Enter your address" required>
            </p>
            <p>
                <button type="submit" class="w3-button w3-lime">Register</button>
                <p>Already have an account? <a href="/">Login Now!</a></p>
            </p>
          </form>
          
    </div>

    <div class="w3-container w3-lime w3-center" style="height:100px;">
        <br>
            <i>&copy; Andalib Rahman Shagoto</i>
    </div>

</body>
</html>