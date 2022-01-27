<header>
    <?php
    $name = filter_input(INPUT_GET, "firstname", FILTER_SANITIZE_STRING);
    if (!empty($name)) {
        include('./view/greetings/user_greetings.php');
    } else {
        include('./view/greetings/visitor_greetings.php');
    }
    ?>
</header>