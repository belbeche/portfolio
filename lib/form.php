<?php
// Je crée une fonction qui me renvoi un input , par rapport a la donné du formulaire en POST (ternaire)
function input($id, $type = 'hidden'){
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<input type='text' class='form-control' id='$id' name='$id' value='$value' ?>";
}

/**
 * je crée une fonction qui me renvoi un textarea 
 */

function textarea($id, $content ='content'){
    $value = isset($_POST[$id]) ? $_POST[$content] : '';
    return "<textarea class='mytextarea' id='$id' name='$id'?>$value</textarea>";
}

function select($id, $options = array()){
    $return = "<select  class='form-control' id='$id' name='$id'>";
    foreach ($options as $k => $v) {
        $selected = '';
        if(isset($_POST['$id']) && $k == $_POST['id']){
            $selected = ' selected = "selected"';
        }
        $return .= "<option value='$k' $selected>$v</option>";
    }

    $return .= '</select>';

    return $return;
}

// function inputHidden($id){
//     var_dump($id);
//     $hidden = $_POST['slug'];
//     if(isset($_POST['slug']) && isset($_POST['slug']) == $hidden){
//         $hidden .= '<input type="hidden" name="'.$id.'">';
//         return $hidden;
//     }
// }