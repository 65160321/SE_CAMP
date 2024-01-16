<html>
    <head>
        <meta charset= "utf-8">

    </head>
    <body>
        <center>
            <h1>ตารางสูตรคูณแม่ {{ $myinput }}</h1>
            <div class="box">
                <div>
                    <?php
                    for ($i = 1; $i <= 24; $i++) {
                        echo "{$myinput} x {$i} = " . $myinput * $i . '<br/>';
                    }
                    ?>
                </div>
            </div>
        </center>
    </body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alkatra&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Alkatra';
        }

        body {
            color: white;
            display: flex;
            justify-content: center;
            -ms-align-items: center;
            align-items: center;
            min-height: 100vh;
            background-image: url("https://64.media.tumblr.com/5d37ab2aa782462c7aa092f7bd0d27cb/2f374d07287b003b-f4/s1280x1920/fe094893d79e09d668e1705e8b9144964f38ce75.gifv");
            background-size: cover;
        }

        .box {
            position: relative;
            width: 330px;
            height: 330px;
            display: flex;
            justify-content: center;
            -ms-align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            overflow: hidden;
            overflow-y: scroll;
        }

        .box div {
            color: rgb(226, 226, 226);
            text-shadow: 2px 2px black;

        }
    </style>

</html>
