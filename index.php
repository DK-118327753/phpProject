<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>118327753</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
        <style>
           .imageGallery {
            width: 960px;
            height: 100%;
            position: relative;
            background-image: url('Home.png');
            background-size: cover;
            }
            
            /*https://www.w3schools.com/css/tryit.asp?filename=trycss_buttons_animate1 */
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
        </style>    
    </head>
    <body class="imageGallery">
        <h1>118327753 - Home</h1>
        <?php
     echo 'Hello, welcome to the homepage of my website.';
     echo 'Here you will be able to access all the available features of my website, view my CV and personal interests';
     echo 'and access my consulting service where you can purchase a consultation programme from a range of options.';
        ?>
        </br>
        <a href="https://dashboard.heroku.com/apps/dk-phpproject1/deploy/github">is1113118327753.herokuapp.com</a>
        </br>
        <a href="https://github.com/DK-118327753/phpProject">GitHub</a>
        <br></br>
        
        <a href="CV.html"><button type="Button" class="button" style="vertical-align:middle"><span>CV Information</span></button>
            <a href="Interests.html"><button type="Button" class="button" style="vertical-align:middle"><span>Interests Information</span></button>
                <a href="ConsultingService.html"><button type="Button" class="button" style="vertical-align:middle"><span>Consultation Services</span></button>
    </body>
</html>
