<?php
class Template {
    function header(){
        require __DIR__ . "/templates/header.php";
        require __DIR__ . "/header.php";
    }

    function footer(){
        require __DIR__ . "/templates/footer.php";
        require __DIR__ . "/footer.php";

    }
}

?>