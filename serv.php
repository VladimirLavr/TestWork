 <?php

    $arr = [
        [
            "id" => 1,
            "email" =>  "zapadpride@ukr.net",
            "name" => "Владимир",
            "pass" => "566"
        ],
        [
            "id" => 2,
            "email" =>  "ssj4vegeta@ukr.net",
            "name" => "Андрей",
            "pass" => "123456"
        ],
        [
            "id" => 3,
            "email" =>  "ss@ukr.net",
            "name" => "Николай",
            "pass" => "852"
        ],
    ];
    $name = htmlspecialchars(trim($_POST['firsName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = htmlspecialchars(trim($_POST['pass']));
    $checkPass = htmlspecialchars(trim($_POST['checkPass']));


    $domain = substr(strrchr($email, "@"), 1);

    $res = getmxrr($domain, $mx_records, $mx_weight);

    if (false == $res || 0 == count($mx_records) || (1 == count($mx_records)
        && ($mx_records[0] == null || $mx_records[0] == "0.0.0.0")) || ($pass !== $checkPass)) {
        echo 1;
    } else {
        foreach ($arr as $key => $value) {
            foreach ($value as $k => $v) {
                if ($email === $v) {
                    $emailResult = "поштова адреса : $email вже існує";
                    file_put_contents('userFile.txt', $emailResult);
                }
            }
        }
        array_push($arr, array("id" => count($arr) + 1, "email" => $email, "name" => $name, "pass" => $pass));
        var_dump($arr);
    }


    ?>