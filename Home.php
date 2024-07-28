<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<style>

body {
   
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(238, 229, 229);
        }
        .h1{
        color:Red;
        }
        .container {
            color:black;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0px;
        }
        header {
            background-color:gray;
            color: #3f3b3b;
            padding: 10px 0;
            text-align: center;
            font-weight: bold;
            font-size:larger;
        }
        nav {
            text-align: center;
            margin-top: 20px;
            
        }
        nav a {
            text-decoration: none;
            color: #333;
            padding: 15px 30px;
            margin: 0 10px;
            border-radius: 5px;
            background-color:#fff;
            transition: background-color 0.3s ease;
            background: linear-gradient(to right,  #a396c2, hsl(0, 58%, 80%));
    border-radius: 10px;
    box-shadow: rgba(223, 229, 227, 0.2) 0px 7px 29px 0px;
    cursor: pointer;
    font-weight: bold;
        }
        nav a:hover {
            background-color: #ddd;
            
    background: white;
    outline: 1px solid rgb(230, 227, 227);
    color: rgb(24, 22, 22);
    border: none;
  }
        
       
        .hero {
            
            height: 40%;
            display: flex;
            margin-top: 3%;
          padding-bottom: 5Px;
            color:white;
            text-align: center;
            
    margin:center 100%;
    padding:12%;
  
            color: rgb(11, 11, 11);
    font-size: 1rem;
    margin-bottom: 0.9rem;
    background-image: url('MainP.jpg');
   background-repeat: no-repeat;
   background-size: 100%;
   
        }
        .hero h1 {
            font-size: 40px;
            margin-bottom: 50%;
            font-size: 3rem;
    margin-bottom: 50%;
        }
        .hero p {
            font-size: 30px;
            margin-bottom: 5px;
        }
        .product-image {
    flex: 1;
    margin-right: 20px;
}

.product-image img {
    max-width: 100%;
    height: auto;
}

.product-details {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

button {
    background-color: #fff;
            transition: background-color 0.3s ease;
            background: linear-gradient(to right, #c1adee, hsl(0, 58%, 80%));
    border-radius: 10px;
    box-shadow: rgba(223, 229, 227, 0.2) 0px 7px 29px 0px;
    cursor: pointer;
    font-weight: bold;
}

button:hover {
    background-color: #ddd;
    background: white;
    outline: 1px solid rgb(230, 227, 227);
    color: rgb(24, 22, 22);
    border: none;
    text-decoration: none;
            color: #333;
            padding: 15px 30px;
            margin: 0 10px;
}
.product {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    text-align: center;
    display: inline-block;
    width: 500px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    background:transparent;
}

        
</style>
</head>
<body>

    
    
        <nav>
            <a href="Home.php">Home</a>
            <a href="about.php">About</a>
            <a href="feedback.php">Feedback</a>
            <a href="Registration.php">Sign In</a>
            <a href="AdminLogin.php">Login</a>
        </nav>
    
    

        <div class="hero">
            <div>
                
               
                <p> </p>
        
        </div>
        </div>
        <div class="product">
            <img src="VegPickle.jpg" alt="Product 1">
            <h2></h2>
            <p></p>
            <h3></h3>
            <button><a href="veg.php-">Shop Now</a></button>
            
    
        </div>
        <div class="product">
            <img src="NonV.jpg" alt="Product 1">
            <h2></h2>
            <p></p>
            <h3></h3>
            <button><a href="Nonveg.php">Shop Now</a></button>
            
    
        </div>
        <div class="section">
            <div>
                
               
        
        </div>
        
    
</body>
</html>