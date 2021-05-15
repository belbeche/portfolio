<?php
// Je crée une fonction qui me renvoi un input , par rapport a la donné du formulaire en POST (ternaire)
function input($id){
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<input type='text' class='form-group' id='$id' name='$id' value='$value' ?>";
}