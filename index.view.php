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
    <section>
        <div>
            <ul>
                <?php foreach ($task as $prop => $val) : ?>
                    <li><strong><?= ucwords($prop).": " ?></strong><?= $val; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section>
        <h2>Separated for more control:</h2>
        <div>
            <ul>
                <li>
                    <strong>Assignment: </strong> <?=$task['assignment']; ?>
                </li>
                <li>
                    <strong>Title: </strong> <?=$task['title']; ?>
                </li>
                <li>
                    <strong>Difficulty: </strong> <?=$task['difficulty']; ?>
                </li>
                <li>
                    <strong>Is Due: </strong> <?=$task['isDue'] ? 'Due' : 'Not Due'; ?>
                </li>
                <li>
                    <strong>Assigned To: </strong> <?=$task['assigned_to']; ?>
                </li>
            </ul>
        </div>
    </section>
    <section>
        <h2>Ternery Endif</h2>
        <div>
            <?php if($task['isDue']) : ?>
                <span class = "icon"><strong>Is Due: </strong>&#9989;</span>
            <?php else : ?>
                <span class = "icon"><strong>Is Due: </strong>&#10006;</span>
            <?php endif; ?>
        </div>
    </section>

</body>

</html>