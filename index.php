<!DOCTYPE html>
<html>
<head>
    <title>BARELOGICS</title>    
     <link rel="icon" href="IMG-20180426-WA0001.jpg" type="image/gif"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
    <style>
        body{
            color: #FFFFFF;
              font-family: Montserrat,"Helvetica Neue","Lucida Grande",Arial,Verdana,sans-serif;
            margin: 0;
            padding: 0;
            
        }
        #myvideo{
            position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;

        }
 
        img{
            left: 0;
            right: 0;
            object-fit: none;
            object-position: center;
            position: fixed;
            width: 150px;
            height: 150px;
            padding:5px;
        }
        h1{
            line-height: 1;
             font-family: Montserrat,"Helvetica Neue","Lucida Grande",Arial,Verdana,sans-serif;
            font-size: 6rem;
            font-weight: 400;
              position: fixed;
            right:0;
            left: 0;
            width: 900px;
            padding-top:12%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            vertical-align: middle;
            
    }
        .footer{
        position: fixed;
            bottom:0;
            font-size: 1rem;
            right: 0;
            left: 0;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            margin-top: auto;
            margin-bottom: auto;
            padding-bottom: 0.888rem;
            line-height:2;
        }
        .contact{
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            font-size: 1rem;
            margin-top: auto;
            margin-bottom: auto;
            line-height:1.5;
                }
         
        @media only screen and (max-width: 780px){
            h1{
                font-size: 5.5rem;
                padding-top: 50%;
                width: 100%;
            }
            
        }
        @media only screen and (max-width: 530px){
        
            img{
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                top:10px;
            }
            h1{
            font-size: 4rem;
                padding-top: 60%;
                text-align: left;
                margin-left: 15%;
                margin-right: 30%;
            
            }
            
        }
    </style>
<body>
    <video muted loop autoplay id="myvideo">
  <source src="bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
    <img src="IMG-20180426-WA0001.jpg"/>
    <h1 id="ll">WE ARE COMING SOON...</h1>
    <footer >
    <p class="footer">&copy; BareLogics 2018</p>
        <p class="contact">info@barelogics.com</p>
    </footer>
    </body>

</html>