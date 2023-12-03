<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* Footer */

footer{
    margin-top: 15px;
    margin-bottom: 0;
   
}

.foot-panel1{
    background-color: #37475a;
    color: white;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 0.8rem;
}

.foot-panel2{
    background-color: #222f3d;
    color: white;
    height: 400px;
    display: flex;
    justify-content: space-evenly;
}

.foot-panel2 a:hover{
    text-decoration: underline;
    cursor: pointer;
}

.foot-panel4 a:hover{
    text-decoration: underline;
    cursor: pointer;
}

ul{
    margin-top: 20px;
}

ul a{
    display: block;
    font-size: 0.85rem;
    margin-top: 10px;
    color: #dddddd;
}

.foot-panel3{
    background-color: #222f3d;
    color: white;
    border-top: 0.5px solid white;
    height: 70px;
    display: flex;
    justify-content: center;
    align-self: center;
}

.logo{
    background-image: url("images/amazon_logo.png");
    background-size: cover;
    height: 50px;
    width: 100px;
}


.foot-panel4{
    background-color: #0f1111 ;
    color: white;
    height: 80px;
    font-size: 0.8rem;
    text-align: center;
  
}

.pages{
    padding-top: 25px;
}

.pages a{
    margin-left: 14px;
}

.copyright{
    margin-top: 10px;
    font-size: 0.8rem;
}


    </style>
</head>
<body>
<footer>
       

        <div class="foot-panel3">
            <div class="logo"></div>
        </div>

        <div class="foot-panel4">
            <div class="pages">
                <A>Conditions of Use</A>
                <a>Privacy Notice</a>
                <A>Your Ads Privacy Choice</A>
            </div>
            <div class="copyright">
            &copy; 1988.. Toyata and family. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>
