<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>

    <form action="" method="">
      <fieldset>
        <legend>Create a new record</legend>
        <label for="name">Name</label> <br/>
        <input type="text" id="name" name="name" value="" /> <br/>
        <br/>
        <label for="age">Age</label> <br/>
        <input type="number" id="age" name="age" value="" /> <br/>
        <br/>
        <label for="email">Email</label> <br/>
        <input type="text" id="email" name="email" value="" /> <br/>
        <br/>
        <label for="color">Color</label> <br/>
        <input type="color" id="color" name="color" value="" /> <br/>
        <br/>
        <label for="submit"></label>Submit<br/>
        <input type="submit" id="submit" name="submit" value="" /> <br/>
        <br/>
      </fieldset>
    </form>

    </body>
</html>