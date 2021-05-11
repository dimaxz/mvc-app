<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<h2>Корзина</h2>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Название товара</th>
        <th scope="col">Кол-во</th>
        <th scope="col">Цена</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($items as $item):?>
        <tr>
            <th scope="row"><?=$item['id']?></th>
            <td><?=$item['name']?></td>
            <td><?=$item['amount']?></td>
            <td><?=$item['price']?></td>
            <td>Х</td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>

</body>
</html>
