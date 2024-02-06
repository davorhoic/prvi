<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globali.css">
    <title>Parcijalni ispit - osnove PHP</title>
</head>

<body>
    <h1>PHP Constants</h1>
    <div class="float-container">
        <div class="float-child">
            <a href="globali.php">Početak</a>
        </div>

        <h2>Magic constants</h2>

        <!-- <pre><?= print_r($_SERVER) ?></pre> -->
        <table>
            <thead>
                <th>Constant</th>
                <th>Value</th>
                <th>Description</th>
            </thead>
            <tbody>
                <tr>
                    <td>__CLASS__</td>
                    <td><?= __CLASS__ ?></td>
                    <td>If used inside a class, the class name is returned.</td>
                </tr>
                <tr>
                    <td>__DIR__</td>
                    <td><?= __DIR__ ?></td>
                    <td>The directory of the file.</td>
                </tr>
                <tr>
                    <td>__FILE__</td>
                    <td><?= __FILE__ ?></td>
                    <td>The file name including the full path.
                    </td>
                </tr>
                <tr>
                    <td>__FUNCTION__</td>
                    <td><?= __FUNCTION__ ?></td>
                    <td>If inside a function, the function name is returned.
                    </td>
                </tr>
                <tr>
                    <td>__LINE__</td>
                    <td><?= __LINE__ ?></td>
                    <td>The current line number.
                    </td>
                </tr>
                <tr>
                    <td>__METHOD__</td>
                    <td><?= __METHOD__ ?></td>
                    <td>If used inside a function that belongs to a class, both class and function name is returned.
                    </td>
                </tr>
                <tr>
                    <td>__NAMESPACE__</td>
                    <td><?= __NAMESPACE__ ?></td>
                    <td>If used inside a namespace, the name of the namespace is returned.</td>
                </tr>
                <tr>
                    <td>__TRAIT__</td>
                    <td><?= __TRAIT__ ?></td>
                    <td>If used inside a trait, the trait name is returned.
                    </td>
                </tr>
                <tr>
                    <td>ClassName::class</td>
                    <td>ClassName::class</td>
                    <td>Returns the name of the specified class and the name of the namespace, if any.
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>