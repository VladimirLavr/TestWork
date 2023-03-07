<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="/form.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="alert"></div>

    <form class="form">
        <input class="inp" type="text" name="firsName" placeholder="Введіть ваше ім'я" required />
        <input class="inp" type="text" name="secondName" placeholder="Введіть ваше прізвище" required />
        <input class="inp" type="text" name="email" placeholder="Введіть вашу пошту" />


        <input class="inp" type="password" name="pass" placeholder="Введіть пароль" required />
        <input class="inp" type="password" name="checkPass" placeholder="Повторіть пароль " required />
        <input type="submit" class="btn" value="Відправити" />


    </form>

</body>

</html>