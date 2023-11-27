<?php 

try {
    $db = new PDO("mysql:dbname=yasuke;host=localhost", "root", "");
} catch (PDOException $th) {
    echo "Erreru : ".$th->getMessage();
}

function seconnecter($email, $mdp)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM user WHERE email=:email AND mdp=:mdp");

        $q->execute([
            "email" => $email,
            "mdp" => $mdp
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        echo "Erreru : ".$th->getMessage();
    }
}