<body>

 <?php
 
    $form = new stdClass();
    $form->name = "";
    $form->email = "";
    $form->method = 'POST';

    $postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);


    if ($postArray) {
        if (in_array("", $postArray)) {
            echo "<p class='trigger warning'>Preencha todos os campos!</p>";
        } elseif (!filter_var($postArray['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<p class='trigger warning'>E-mail informado não é validado!</p>";
        } else {
            $saveStrip = array_map("strip_tags", $postArray);
            $save = array_map("trim", $saveStrip);

            echo "<p class='trigger accept'>Cadastro feito com sucesso!</p>";

        }
    }
    
    $form->method = "post";
    require __DIR__ . "/form.php";

    ?>

</body>

</html>