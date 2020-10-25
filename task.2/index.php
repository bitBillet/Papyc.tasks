<?php
    include 'Form.php';
    include 'Message.php';

    $isPosted = false;

    if (!empty($_POST)) {
        $data = $_POST;
        $form = new Form();
        $validateResult = $form->validate($data);
        $message = new Message();
        $messageResult = $message->getMessage($validateResult);
        $isPosted = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="comment">Комментарий</label><br>
        <input type="text" name="comment" value="<?= @$data['comment'] ?>"><br>
        <label for="name">ФИО</label><br>
        <input type="text" name="name" value="<?= @$data['name'] ?>"><br>
        <label for="adress">Адрес</label><br>
        <input type="text" name="adress" value="<?= @$data['adress'] ?>"><br>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" value="<?= @$data['email'] ?>"><br>
        <label for="mobile">Телефон</label><br>
        <input type="number" name="mobile" value="<?= @$data['mobile'] ?>"><br>
        <label for="file">Файл</label><br>
        <input type="file" name="file" value="<?= @$data['file'] ?>"><br>
        <button type="submit">ОТПАВИТЬ</button>
    </form>
    <div class="request">
    <?php
        if (true === $isPosted && count($messageResult) > 0) {
            foreach($messageResult as $result) {
                echo '<span>' . $result . '</span>' . '<br>';
                break;
            }
        } elseif (true === $isPosted && count($messageResult) === 0) {
            echo '<div class="success">Форма успешно отправлена</div>';
        }
    ?>
    </div>

    <style>
        span {
            color: red;
        }
        .success {
            color: green;
        }
        .request {
            margin-top: 20px;
        }
        button {
            margin-top: 20px;
        }
    </style>
</body>
</html>