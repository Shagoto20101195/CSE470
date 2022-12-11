<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Graine - Homepage</title>
</head>
<body>
    <header>
        <div class="w3-container w3-lime w3-center" style="height:200px;">
            <h1><b>Graine</b></h1>
            <br><br>
            <h3><i>Graine is a web application that allows you to buy or sell groceries through wide across</i></h3>
        </div>
    </header>
    
    <main>
        <div class="w3-container w3-white w3-padding-large" style="height:400px;">
            <div class="w3-container w3-lime">
                <h4>Login Now on Graine!</h4>
            </div>
              
              <form class="w3-container" method="POST">
                @csrf
                <p>
                    <label>Login As:</label>
                    <input class="w3-radio" type="radio" id="buyer" name="user" value="Buyer" required>
                    <label for="user">Buyer</label>
                    <input class="w3-radio" type="radio" id="seller" name="user" value="Seller" required>
                    <label for="user">Seller</label>
                      
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input class="w3-input" type="text" name="email" id="email" placeholder="Enter your email" required>
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input class="w3-input" type="password" name="password" id="password" placeholder="Enter your password" required>
                </p>
                <p>
                    <button type="submit" class="w3-button w3-lime">Login</button>
                    <p>Don't have an account? <a href="register">Register here!</a></p>
                </p>
              </form>
        </div>
    </main>
   

    <footer>
        <div class="w3-container w3-lime w3-center" style="height:100px;">
            <br>
                <i>&copy; Andalib Rahman Shagoto</i>
        </div>
    </footer>
</body>
</html>