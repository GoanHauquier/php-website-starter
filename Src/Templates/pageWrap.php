<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $data['pageTitle'] ?></title>
        <meta name="description" content="<?= $data['pageDescription'] ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <?php include 'Src/Templates/header.php'; ?>

        <?php include $data['view']; ?>

        <?php include 'Src/Templates/footer.php'; ?>
    </body>
</html>