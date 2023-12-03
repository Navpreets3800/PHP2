<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOYATA DEALERSHIP</title>
    <!--Favicon-->
    <link rel="icon" href="favicon.icon" type="image/x-icon">
    <!--Description and Keywords-->
    <meta name="description" content="A creative Website of a Coffee Shop for selling most consumed product">
    <meta name="keywords" content="Americano, Coffeehouse,Coffeetypes,Espresso">
    <!--Link To CSS-->
    <link rel="stylesheet" href="style.css">
    <!--Box Icons-->
    <style>
        /*Google Fonts*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.background{
    width:100%;
    min-height:100vh;
    background-image: url(imagesUsed/logo.jpg);
    background-repeat:no-repeat;
    background-size: cover;
    background-position: center;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(17rem,auto));
    align-items: center;
    gap:1.5rem;
}
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 4rem;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
}

/*Variables*/
:root{
    --main-color:blue;
    --second-color:green;
    --text-color:black;
    --bg-color:rgb(196, 255, 255);

    /*Box Shadow*/
    --box-shadow:2px 2px 10px 4px rgba(21, 89, 6, 0.15);
}
section{
    padding:50px 100px;
}
img{
    width:100%;
}
body{
    color:var(--text-color);
}
.home-img{
    margin: 0;
}
header{
    position:fixed;
    width:100%;
    top:0;
    right:0;
    z-index:1000;
    display:flex;
    justify-content: space-between;
    align-items:center;
    padding: 18px 100px;
    transition: 0.5s linear;
    background-color: #3d3d3d;
}
header.shadow{
    background: var(--text-color);
    box-shadow: var(--box-shadow);
}
.logo img{
    width:60px;
}
.navbar{
    display:flex;
}
.navbar a{
    padding:8px 17px;
    color:var(--bg-color);
    font-size:1rem;
    text-transform:uppercase;
    font-weight:500;
}
.navbar a:hover{
    background: var(--main-color);
    border-radius: 0.2rem;
    transition: 0.2s all linear;
}
.header-icon{
    font-size:22px;
    cursor:pointer;
    z-index:10000;
    display:flex;
    column-gap: 0.8rem;
}
.header-icon .bx{
    color:var(--bg-color);
}
.header-icon .bx:hover{
    color:var(--main-color);
}
#menu-icon {
    background: var(--bg-color);
    font-size:24px;
    z-index:100001;
    cursor:pointer;
    display:none;
}
.search-box.active{
    top: 110%;
    box-shadow: var(--box-shadow);
    transition: 0.2s all linear;
}
.search-box{
    position:absolute;
    top:-100%;
    left:50%;
    transform:translate(-50%);
    background: var(--main-color);
    width:100%;
}
.search-box input{
    padding: 20px;
    border:none;
    outline:none;
    width:100%;
    font-size:1rem;
    color:var(--main-color);
}
.search-box input::placeholder{
    font-size:1rem;
    font-weight: 500;
}
.home{
    width:100%;
    min-height:100vh;
    background-image: url('imagesUsed/img1.jpg');
    background-repeat:no-repeat;
    background-size: cover;
    background-position: center;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(17rem,auto));
    align-items: center;
    gap:1.5rem;
}
.home-text h1{
    font-size: 3.4rem;
    color:var(--main-color);
    text-transform: uppercase;
    letter-spacing: 1px;
}
.home-text p{
    font-size:0.938rem;
    color:var(--bg-color);
    margin:0.5rem 0 1.4rem;
}
.btn{
    padding:10px 40px;
    border-radius: 0.3rem;
    background-color: var(--main-color);
    color: var(--bg-color);
    font-weight: 500;
}
.btn:hover{
    background: #55d7fe;
}
.about{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(17rem,auto));
    align-items: center;
    gap:1.5rem;
    background-color: #6bc3e5;
}
.about-img img{
border-radius: 0.5rem;
}
.about-text h2{
    font-size:1.8rem;
    text-transform: uppercase;
}
    </style>
</head>

<body>
  <!--Navbar-->
  <header>
    <a href="#" class="logo">
        <img src="imagesUsed\img1.jpg" alt="TOYATA MOTORS">
    </a>
    <!--Menu Icon-->
    <i class='bx bx-menu' id="menu-icon"></i>
    <!--Links-->
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="display.php">View Users</a></li>
        <li><a href="#inventory">Inventory </a></li>
        <li><a href="#customers">Customers</a></li>
    </ul>
    <!--Icon-->
    <div class="header-icon">
        <i class='bx bx-cart-alt'></i>
        <i class='bx bx-search' id="search-icon"></i>
    </div>
    <!--Search Box-->
    <div class="search-box">
        <input type="search" name="search" id="search" placeholder="Search Here...">
    </div>
  </header>
  
<!--Home-->
  <section class="home" id="home">
  
    <div class="home-text">
        
        
        <h1>
            STOP DREAMING <br> START LIVING
        </h1>
        <p>
            Global supply issues affecting the automotive manufacturing industry are causing new vehicle delivery delays and inventory of some vehicles may be limited: <br> Please contact your local Toyota dealer for information about availability of your preferred Toyota vehicle
        </p>
        <a href="#" class="btn">Shop Now</a>
    </div>
    
  </section>
