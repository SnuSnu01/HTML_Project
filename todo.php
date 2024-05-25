<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo Liste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>ToDo Liste</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Startseite</a></li>
                    <li><a href="projekte.html">Programmierprojekte</a></li>
                    <li><a href="dokumentation.html">Technische Dokumentation</a></li>
                    <li><a href="todo.php">ToDo Liste</a></li>
                    <li><a href="kontakt.html">Kontaktdaten</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
        <h2>Meine Aufgaben</h2>
        <form method="post" action="todo.php">
            <input type="text" name="aufgabe" placeholder="Neue Aufgabe hinzufügen" required>
            <input type="submit" value="Hinzufügen">
        </form>
        <ul>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['aufgabe'])) {
                $aufgabe = htmlspecialchars($_POST['aufgabe']);
                echo "<li>$aufgabe</li>";
            }
            ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Meine Webseite</p>
    </footer>
</body>
</html>
