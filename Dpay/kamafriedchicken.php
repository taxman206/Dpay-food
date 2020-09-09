<!DOCTYPE html>

<html lang="en">
<head>
  <title>RUSH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
      html {
  scroll-behavior: smooth;
}
      .panel-footer{
          background-color: lightgray;
      }
      
 .footer {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: center;
        }
    
    
    /* Remove the jumbotron's default bottom margin */ 
     .K1DV {
      margin-bottom: 0;
    }
   
      h1 {
      padding: 5px;
        ;}
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 5px;
    }
      .img{
          width: 100%;
      }
      
  </style>
</head>
<body>

<div class="K1DIV">
  <div class="KamaHeader text-center">
    <h1>Kamas Fried Chicken</h1>      
    <p>Fried chicken Crispy</p>
  </div>
</div>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#DpayNavBar">
    <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">DPAY</a>
    </div>
      
      
      <div class="collapse navbar-collapse" id="DpayNavBar">
      <ul class="nav navbar-nav">
        <li classf="active"><a href="Dpayrestuarants.php">Home</a></li>
            <li><a href="#0">Fried Chicken</a></li>
          <li><a href="#1">Chicken Wings</a></li>
            <li><a href="#2">Fried Chicken Deals</a></li>
            <li><a href="#3">Drinks</a></li>
            <li><a href="#">Extras</a></li>
      </ul>
          
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
    <h1 class="text-center">Fried Chicken</h1>
 <div class="container" id="0">   
     <form method="post" action="index.php? actionadd&id=<?php echo $row["id"]; ?>">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Sweet and Sour <p>6pcs</p></div>
          <div class="panel-body"><img src="FRIEDCHICKEN.jpg" class="img-responsive" style="width:80%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$19.99</p>
              <p><button>Add to Cart</button></p>
              </div>
        
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Soy <p>6pcs</p></div>
        <div class="panel-body"><img src="soy.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$19.99</p>
              <p><button>Add to Cart</button></p>
              </div>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Snow Cheese <p>6pcs</p></div>
        <div class="panel-body"><img src="snowcheese.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$19.99</p>
              <p><button>Add to Cart</button></p>
              </div>
    </div>
  </div>
</div>
    </div>
      <h1 class="text-center">Chicken Wings</h1>
 <div class="container" id="1">        
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Deep Fried <p>6pcs</p></div>
        <div class="panel-body"><img src="wings.jpg" class="img-responsive" style="width:90%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$18.50</p>
              <p><button>Add to Cart</button></p>
              </div>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Sweet and Sour <p>6pcs</p></div>
        <div class="panel-body"><img src="wings%20oldskool.jpg" class="img-responsive" style="width:75%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$19.99</p>
              <p><button>Add to Cart</button></p>
              </div>
      </div>
    </div>
    
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Dunked <p>6pcs</p></div>
        <div class="panel-body"><img src="dunked.jpg" class="img-responsive" style="width:53%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$19.99</p>
              <p><button>Add to Cart</button></p>
              </div>
         </div>
    </div>
  </div>
</div>
     
      <h1 class="text-center">Fried Chicken Deals</h1>
 <div class="container" id="2">        
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">MEAL DEAL 1 <p>Fried Chicken+Drink</p></div>
        <div class="panel-body"><img src="combo1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$21.99</p>
              <p><button>Add to Cart</button></p>
              </div>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Wing Night <p>24 wings+3 drink</p></div>
        <div class="panel-body"><img src="combo2.jpg" class="img-responsive" style="width:65%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$28.99</p>
              <p><button>Add to Cart</button></p>
              </div>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Double Trouble <p>Fried Chicken+Wings</p></div>
        <div class="panel-body"><img src="combo3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$35.99</p>
              <p><button>Add to Cart</button></p>
              </div>
    </div>
  </div>
</div>
     </div>
    
     
      <h1 class="text-center">Drinks</h1>
 <div class="container" id="3">        
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Juice</div>
        <div class="panel-body"><img src="juice.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$3.99</p>
              <p><button>Add to Cart</button></p>
              </div>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Chocolate Milkshake</div>
        <div class="panel-body"><img src="milkshake.jpg" class="img-responsive" style="width:52%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$8.99</p>
              <p><button>Add to Cart</button></p>
              </div>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Cool Drinks </div>
        <div class="panel-body"><img src="fanta.jpg" class="img-responsive" style="width:68%" alt="Image"></div>
          <div class="panel-footer">
              <p class="price">$4.99</p>
              <p><button>Add to Cart</button></p>
              </div>
    </div>
  </div>

     </div>
     
     </div>
</body>
<footer> <?php
    include "footer.php";
        ?>
    </footer>
      
     
    
</html>
