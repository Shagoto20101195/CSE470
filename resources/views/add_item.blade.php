<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Graine - {{ $request['email'] }}</title>
    
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
        
        <div class="w3-container w3-white w3-padding-large" style="height:500px;">
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-lime" > <i class="fa fa-bars"></i> </button>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                  <a href="\seller" class="w3-bar-item w3-button">Home</a>  
                  <a href="\update" class="w3-bar-item w3-button">Update Profile</a>
                  <a href="\home" class="w3-bar-item w3-button">Logout</a>
            </div>
        </div>

            <div class="w3-container w3-white w3-padding-large">
                <form class="w3-container" method="post">
                    @csrf
                    <p>
                        <input class="w3-radio" type="radio" id="exist" name="exist" value="Exists" required>
                        <label for="user">Existing Item</label>
                        <input class="w3-radio" type="radio" id="non" name="non" value="Nonexists" required>
                        <label for="user">Non Existing Item</label>
                          
                    </p>
                    <p>
                        <label for="name">Name</label> <!-- action = to where after posting -->
                        <input class="w3-input" type="text" name="name" id="name" placeholder="Enter item name" required>
                    </p>
                    <p>
                        <label for="type">Type</label> <!-- action = to where after posting -->
                        <input class="w3-input" type="text" name="type" id="type" placeholder="Enter item type" required>
                    </p>     
                    <p>
                        <label for="number">Quantity Number</label>
                        <input class="w3-input" type="text" name="number" id="number" placeholder="Enter quantity number" required>
                    </p>
                    <p>
                        <label for="price">Price Per Unit (if non existing)</label>
                        <input class="w3-input" type="text" name="price" id="price" placeholder="Enter your price per unit">
                    </p>
                    <p>
                        <button type="submit" class="w3-button w3-lime">Add</button>
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