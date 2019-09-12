<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <header>
        <h1>
            <?php
            

            $greeting = "What's up";
            //super global
            //Gets value associated with url parameter: e.g. name=Sam
            //NOT SECURE. Allows people to inject code >:O
            //Wrap w/htmlspecialchars function to 'sanitize input'. Guilt until proven innocent!
            $name = htmlspecialchars($_GET['name']);

            //php -S localhost: whatever port
            //serves php to browser

            echo "Goodmorning, {$name}";

            ?>
        </h1>
    </header>
    <section>
        <div>
            <p>
                <!-- shorthand for a php tag echoing something upon execution -->
                <?=
                //use nl2br with \n sequence to break lines
                
                nl2br("\n $greeting" . " $name?");
                ?>
            </p>
        </div>
    </section>

</body>

</html>