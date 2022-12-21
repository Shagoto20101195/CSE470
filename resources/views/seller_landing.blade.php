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
            <h3><i>Welcome {{ $val = DB::table('users')->select('role')->where('email', $request['email'])->get()->value('role') }}!</i></h3>
        </div>
    </header>

    <main>
        
        <div class="w3-container w3-white w3-padding-large" style="height:1000px;">
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-lime" > <i class="fa fa-bars"></i> </button>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                  <a href="\update" class="w3-bar-item w3-button">Update Profile</a>
                  <a href="add_items" value="{{ $request }}" method="post" class="w3-bar-item w3-button">Add Items</a>
                  <a href="sell_items" value="{{ $request }}" method="post" class="w3-bar-item w3-button">Sell Items</a>
                  <a href="\home" class="w3-bar-item w3-button">Logout</a>
            </div>
        </div>

        <div class = "w3-container" style="height:50px;">
        </div>

        <div class="w3-container">
                <table class="w3-table-all w3-centered">
                    <caption><h1>Items That You Own</h1></caption>
                    <tr class="w3-hover-lime">
                        <th>Item Name</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Price Per Unit</th>
                    </tr>

                    @php
                        $items = DB::table('stacks')->where('email', $request['email'])->get();
                    @endphp
                    @foreach ($items as $item)
                        <tr class="w3-hover-lime">
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price }}</td>
                        </tr>
                    @endforeach
                </table>   
        </div>

        <div class = "w3-container" style="height:50px;">
        </div>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <caption><h1>Transactions</h1></caption>
                <tr class="w3-hover-lime">
                    <th>ID</th>
                    <th>To</th>
                    <th>Item Name</th>
                    <th>Total Price</th>
                </tr>

                @php
                    $items = DB::table('transactions')->where('from', $request['email'])->get();
                @endphp
                @foreach ($items as $item)
                    <tr class="w3-hover-lime">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->to }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->total_price }}</td>
                    </tr>
                @endforeach
            </table>   
    </div>

    <div class = "w3-container" style="height:50px;">
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