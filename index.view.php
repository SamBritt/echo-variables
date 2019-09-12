<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <header>
        <h1>
            <?= "Goodmorning, {$name}"; ?>
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
            <h2>Listing Names with foreach</h2>
            <ul>
                <!-- Alternative Syntax -->
                <?php foreach ($names as $name) : ?>
                    <li><?= $name; ?></li>
                <?php endforeach; ?>

                <?php
                foreach ($names as $name) {
                    echo "<li>$name</li>";
                }
                ?>
            </ul>
            <ol>
                <?php foreach ($person as $property => $value) : ?>
                    <li><strong><?= "$property: " ?></strong><?= $value; ?></li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

</body>

</html>