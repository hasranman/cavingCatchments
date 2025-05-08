<?php

function printNestedArray($array, $list) : string {

    $list = '<ul>';
    
    foreach($array as $key => $value) {
        if (is_array($value)) {
            $list .= '<li>' . $key . '</li>';
            $list .= printNestedArray($value, $list);
            continue;
        }

        $list .= '<li>' . $value . '</li>';
    }
    
    $list .= '</ul>';
    return $list;
}

?>