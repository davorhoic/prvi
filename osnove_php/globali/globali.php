<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globali.css">
    <title>Parcijalni ispit - osnove PHP</title>
</head>

<body>
    <h1>Superglobals</h1>
    <div class="float-container">
        <div class="float-child">
            <a href="globali.php">Početak</a>
        </div>

        <h2>$_SERVER</h2>
        <!-- <pre><?= print_r($_SERVER) ?></pre> -->
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_SERVER as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>
        <h2>$_REQUEST</h2>
        <pre><?= print_r($_REQUEST) ?></pre>
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_REQUEST as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>
        <h2>$_POST</h2>
        <pre><?= print_r($_POST) ?></pre>
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_POST as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>
        <h2>$_GET</h2>
        <pre><?= print_r($_GET) ?></pre>
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_GET as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>

        <h2>$_FILES</h2>
        <pre><?= print_r($_FILES) ?></pre>
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_FILES as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>
        <h2>$_ENV</h2>
        <pre><?= print_r($_ENV) ?></pre>
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_ENV as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>
        <h2>$_COOKIE</h2>
        <pre><?= print_r($_COOKIE) ?></pre>
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_COOKIE as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>
        <h2>$_SESSION</h2>
        <pre><?=  print_r($_SESSION) ?></pre>
        <table>
            <thead>
                <th>Key</th>
                <th>Value</th>
            </thead>
            <tbody>
                <?php
                foreach ($_SESSION as $k => $v) {
                    echo "<tr>" .
                        "<td>" . $k . "</td>" .
                        "<td>" . $v . "</td>" .
                        "</tr>";
                }; ?>
            </tbody>
        </table>
    </div>
</body>

</html>