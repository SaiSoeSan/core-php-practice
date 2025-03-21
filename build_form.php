<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

function required($field){
    if(isset($field['required']) && $field['required']){
        return 'required';
    }
    return '';
}

function setValue($field){
    if(isset($field['value'])){
        return $field['value'];
    }
    return '';
}

function build_form($forms){
    $markup = "<form method='{$forms['method']}'";
    if(isset($forms['action'])){
        $markup .= "action = '{$forms['action']}'";
    }
    $markup .= ">";
    $markup .= "<h2>My Form</h2>";
    foreach($forms['fields'] as $key => $field){
        if($field['type'] !== 'submit'){
            $markup .= '<label for="'.$key.'">'.$field['label'].'</label>';
        }
        if($field['type'] === 'text'){
            $markup .= "<input type='text' id='{$key}' value='".setValue($field)."' name='{$key}' ".required($field)."><br><br>";
        }else if($field['type'] === 'textarea'){
            $markup .= "<textarea id='{$key}' name='{$key}' ".required($field).">".setValue($field)."</textarea><br><br>";
        }else if($field['type'] === 'select'){
            $markup .= "<select id='{$key}' name='{$key}' ".required($field).">";
            foreach($field['options'] as $option){
                $markup .= "<option value='{$option}'>{$option}</option>";
            }
            $markup .= "</select><br><br>";
        }else if($field['type'] === 'radio'){
            foreach($field['options'] as $k => $option){
                $markup .= "<input type='radio' id='{$k}' name='{$k}' value='{$option}' ".required($field).">";
                $markup .= "<label for='{$k}'>{$option}</label>";
            }
            $markup .= "<br><br>";
        }else if($field['type'] === 'checkbox'){
            foreach($field['options'] as $kk => $option){
                $markup .= "<input type='checkbox' id='{$kk}' name='{$kk}[]' value='{$option}' ".required($field).">";
                $markup .= "<label for='{$kk}'>{$option}</label>";
            }
            $markup .= "<br><br>";
        }else if($field['type'] === 'submit'){
            $markup .= "<input type='submit' name='submit' value='{$field['value']}'>";
        }   
    }
    $markup .= "</form>";
    echo $markup;
}

require_once('form_array.php');

build_form($forms);