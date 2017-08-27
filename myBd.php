<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        include 'lib.php';
        $customers = getAllCustomers();
        ?>
        <table border="1" class="myTable" width="50%">
            <tr>
                <td>Имя</td>
                <td>Возраст</td>
                <td>Пол</td>
                <td>Телефон</td>
            </tr>
            <?php foreach ($customers as $myArray): ?>
            <tr>
                <td><?= $myArray['name']?></td>
                <td><?= $myArray['age']?></td>
                <td><?= $myArray['sex']?></td>
                <td><?= $myArray['phone']?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>