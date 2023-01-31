<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    
    <h1>Pagina Usuario de index <?php echo $data[0]->getId_user(); ?></h1>

    <?php foreach($data as $datauser) : ?>
        <li> <?php echo $datauser->getId_user()?></li>
        <li> <?php echo $datauser->getUser_email()?></li>
        <li> <?php echo $datauser->getUser_name()?></li>
        <li> <?php echo $datauser->getFirst_name()?></li>
        <li> <?php echo $datauser->getLast_name()?></li>
        <li> <?php echo $datauser->getUser_password()?></li>
        <li> <?php echo $datauser->getRol()?></li>
        <li> <?php echo $datauser->getUser_date()?></li>
        <li> <?php echo $datauser->getGender()?></li>
        <li> <?php echo $datauser->getPrivate()?></li>
        <li> <?php echo $datauser->getLast_login()?></li>
        <br>
    <?php endforeach; ?>

    <?php require 'views/footer.php'; ?>


</body>
</html>