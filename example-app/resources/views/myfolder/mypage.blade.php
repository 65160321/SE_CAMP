<html>
    <head>
        <meta charset= "utf-8">
    </head>
    <body>
        <div class="box">
        <div>

                <h1>กรอกแม่สูตรคูณที่ต้องการ
                    <center>
                        <form method="post" action="/my-route">
                            @csrf
                            <input type="text" name="myinput">
                            <button type="submit">Submit</button>
                        </form>
                    </center>
                </h1>
        </div>

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
            background-image: url(https://64.media.tumblr.com/bfe90ef1addacef577bc2813d1cfd001/807f9e5a5e0ce538-eb/s1280x1920/5434e6201950f308e365f0e00496bb2e28f624f6.gifv);
            background-size: cover;
        }

        .box {
            position: relative;
            width: 500px;
            height: 200px;
            display: flex;
            justify-content: center;
            -ms-align-items: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            overflow: hidden
        }

        .box div {
            color: rgb(226, 226, 226);
            text-shadow: 2px 2px black;
            z-index: 2
        }

        .box::before{
            content: '';
            position: absolute;
            width: 120px;
            height: 300%;
            background: linear-gradient(#00ff73,#fc7a01);
            animation: rotate 4s linear infinite;
        }

        .box::after{
            content: '';
            position: absolute;
            background: #3c6345;
            inset: 5px;
            border-radius: 20px;
        }

        @keyframes rotate{
            from{
                transform: rotate(0deg)
            }
            to{
                transform: rotate(360deg)
            }
        }
    </style>
</html>
