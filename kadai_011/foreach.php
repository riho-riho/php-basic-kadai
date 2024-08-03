<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $item_data = ['名前'=>'玉ねぎ', '値段'=>200, '産地'=>'北海道'];

        foreach($item_data as $key => $value) {
            # code...
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
</body>
</html>