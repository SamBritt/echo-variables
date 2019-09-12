<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <header>
        <h1>
            <?= "Goodmorning, {$name}";?>
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