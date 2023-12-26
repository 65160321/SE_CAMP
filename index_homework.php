<html>

    <head>
        <meta charset= "utf-8">
        <style>
            
        </style>
        <link rel="stylesheet" href="styleHW3.css">    
          

    </head>
 
    <body>
        <center>
        <?php $multi_x = 25; ?>
        <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        <div class="box">
            <div>
                <?php
                    for( $i=1; $i<=24; $i++ ) {
                    echo "{$multi_x} x {$i} = ".($multi_x*$i)."<br/>";
                    }
                ?>
            </div>          
        </div>
        </center>
        
    </body>
</html>