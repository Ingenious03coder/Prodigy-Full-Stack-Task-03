<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Non Veg pickles</title>
    <style>
        
        
/* Reset some default styles for the list */
body {
  margin: 0;
  padding: 0;
  
  font-family: Arial, sans-serif;
}

h5{
    font-family: Arial, sans-serif;
    font-size: 24px;
    font-weight: bold;
    font-style: italic;
    color: #fa58b1;
    
    font-weight: bold;
    text-align: center;
    text-decoration: underline;
    text-transform: uppercase;
    letter-spacing: 2px;
    word-spacing: 5px;
    text-shadow: 2px 2px 10px rgba(1, 1, 1, 0.5);
   
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

/* Style the navigation bar */
nav {
  
    /* Background color of the navigation bar */
    padding: 20px;
    transition: background-color 0.3s ease;
            background: linear-gradient(to right, #bbabe2, hsl(0, 68%, 80%));
    border-radius: 10px;
    box-shadow: rgba(223, 229, 227, 0.2) 0px 7px 29px 0px;
    cursor: pointer;
    font-weight: bold;
    margin-left:10px;
}

/* Style the list items (menu items) */
ul li {
    display: inline; /* Display items horizontally */
 position :center;
       padding:20px; /* Add some space between menu items */
}

/* Style the links (text) inside the list items */
ul li a {
    text-decoration: none; /* Remove underlines from links */
    color: #fff; /* Text color for menu items */
    font-weight: bold; 
    font-size:25px;
    margin-left:40px;
    gap:2px;/* Make the text bold */
}

/* Style the links when hovered over */
ul li a:hover {
    color: #ff6600; /* Change text color on hover */
}
.container {
        max-width: 100px;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        margin-left: 100px;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .product {
       
       border: 2px solid #f0ebeb;
   padding: 5px;
   margin-left: 100px;
   text-align: center;
   display: inline-block;
   width: 250px;
   box-shadow: 0px 0px 10px rgb(231, 228, 228);
   background:transparentrgb(245, 243, 243)
   }

   .product img {
       width: 50%;
       border-radius: 8px;
       margin-bottom: 15px;
   }

   

.section {
   border: 2px solid #ece5e5;
   padding: 10px;
   margin-left: 100px;

   text-align: center;
   display: inline-block;
   width: 250px;
   box-shadow: 0px 0px 10px rgb(233, 225, 225);
   background:transparent;
}

.section img {
   max-width: 100%;
}

.main{
   border: 2px solid #eee2e2;
   padding: 10px;
   margin-left: 100px;

   text-align: center;
   display: inline-block;
   width: 250px;
   box-shadow: 0px 0px 10px rgb(228, 228, 228);
   
   background:transparent;

}

.main{
   max-width:100%;
}

</style>
</head>
<body>
    <h5>Non-Veg Pickles</h5>
    <nav>
        <div class="sidebar">
        <ul>
            <li><a href="#product">Mutton Pickles</a></li>
            <li><a href="#Amala">Chiken Pickles</a></li>
            <li><a href="#main">Fish pickle</a></li>
            <li><a href="#article"></a></li>
            <li><a href="#aside"></a></li>
            <li><a href="#onion"></a></li>
            
            <li><a href="#coconut"></a></li>
            <li><a href="#tomato"></a></li>
            <li><a href="#lemon"></a></li>
        </ul>
        </div>
    </nav>
    
    
    <div class="product">
        <img src="p55.jpg" alt="Product 1">
        <h2>Mutton pickle</h2>
        <p>150gm</p>
        <h3>Price: 100 rs</h3>
        <button><a href="55.html">Buy now</a></button>
    </div>
    
    <div class="product">
        <img src="p60.jpg" alt="Product 1">
        <h2>Mutton pickle</h2>
        <p>200gm</p>
        <h3>Price: 150 rs</h3>
        <button><a href="60.html">Buy now</a></button>
    </div>


    

    <div class="product">
        <img src="p61.png" alt="Product 1">
        <h2>Mutton pickle</h2>
        <p>150gm</p>
        <h3>Price: 130 rs</h3>
        <button><a href="61.html">Buy now</a></button>
    </div>
    
    
    <section id="Amala">
        <div class="section">
            <img src="p51.jpg" alt="Product 1">
            <h2>Chiken pickle</h2>
            <p>100gm</p>
        <h3>Price: 100 rs</h3>
            <button><a href="51.html">Buy now</a></button>
        </div>
        <div class="section">
            <img src="p52.jpg" alt="Product 1">
            <h2>Chiken pickle</h2>
            <p>150gm</p>
        <h3>Price: 120 rs</h3>
            <button><a href="52.html">Buy now</a></button>
        </div>
        <div class="section">
            <img src="p53.jpg" alt="Product 1">
            <h2>Chiken pickle</h2>
            <p>100gm</p>
        <h3>Price: 100 rs</h3>
            <button><a href="53.html">Buy now</a></button>
        </div>
        

        <main id="main">
            <div class="main">
                <img src="p70.jpeg" alt="Product 1">
                <h2>Fish pickle</h2>
                <p>150gm</p>
            <h3>Price: 100 rs</h3>
            <button><a href="70.html">Buy now</a></button>
            </div>
            <div class="main">
                <img src="p71.jpg" alt="Product 1">
                <h2>Fish pickle</h2>
                <p>100gm</p>
            <h3>Price: 100 rs</h3>
            <button><a href="71.html">Buy now</a></button>
            </div>
            <div class="main">
                <img src="p69.jpg" alt="Product 1">
                <h2>Fish pickle</h2>
                <p>100gm</p>
            <h3>Price: 150 rs</h3>
            <button><a href="69.html">Buy now</a></button>
            </div>
            
        </main>


    </body>
    </html>
