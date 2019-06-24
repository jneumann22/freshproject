<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fresh Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            input:focus {
                outline: none;
            }
            .label {
                margin-bottom: 5px;
                font-family: 'Nunito';
                font-weight: 20px;
                font-size: 10px;
                margin-top: 30px;
            }
            .intro {
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                margin-bottom: 25px;
            }

            .holder {
                margin-left: 100px;
                margin-top: 100px;
            }

            .header {
                font-family: 'Nunito', sans-serif;
                font-weight: 400px;
            }

            .button {
                background-color:#72f3a8;
	            display:inline-block;
	            cursor:pointer;
	            color:#0d0c0d;
	            font-family: 'Nunito';
                font-size:15px;
	            padding:21px 76px;
	            text-decoration:none;
                text-shadow:0px 1px 0px #2f6627;
                margin-top: 40px;
            }
            .button:active {
	            position:relative;
	            top:1px;
            }

            .inputs {
                padding: 8px;
                display: block;
                border: none;
                border-bottom: 1px solid #ccc;
                width: 300px;
            }

           

        <!-- </style>
    </head>
    <body>
    <div id = "app">
        <div class = 'holder'>
       <h1 class = 'header'>Sign Up for Fresh Interactive!</h1>

       

       <p class = 'intro'>We'll send you exciting updates and interesting news from our office! <br> Just enter your name and email below and you're all set!</p>

       
        <form> 
        <div class ='label'>
       Name*
       </div>
        <div class = 'formOne'>
       <input class = 'inputs' type = 'text' id='name' required v-model="newUser.name" placeholder = "First Name">

       </div>

       <div class ='label'>
       Email*
       </div>
       <div class = 'formTwo'>
       <input class = 'inputs' type="email" id = 'email' required v-model="newUser.email" placeholder = "Email">
       </div>
        
       <div>
       <input class = 'button' type="submit" @click.stop.prevent="createUser()" value = "SIGN UP">
       </div>


        </form>
        
        </div>
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>


</html>
