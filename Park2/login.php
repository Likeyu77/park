<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //connect to our database
    $mysqli = require __DIR__ . "/database.php";
    
    //query about getting user based on the email address
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));

    // execute sql query
    $result = $mysqli->query($sql);
    
    // fetches a result row as an associative array.
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();

            // session_regenerate_id() will replace the current session id with a new one, and keep the current session information.
            session_regenerate_id();
            
            //set session variable 
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/logup.css">
</head>
<body>

    <article>
        <h2>Welcome to Indestry Revolution Park!</h2>
        <p>Thank you for being the member of our park!</p>
    </article>
        
   

    <section class = "main">

            <?php if ($is_invalid): ?>
                <em>Invalid login</em>
            <?php endif; ?>

        <div class="login">


            <form method="post">
                <label>Login</label>
                <input type="email" name="email" id="email" placeholder="Email"
                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                
                <input type="password" name="password" id="password" placeholder="Password">
                
                <button>Log in</button>
            </form>
        </div>
    </section>
   
    
    
</body>
</html>