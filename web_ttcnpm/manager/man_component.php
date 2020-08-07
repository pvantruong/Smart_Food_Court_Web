<?php

function component($dishname, $vendor, $time){
    $element = "
    <tr>
            <td>$dishname</td>
            <td>$vendor</td>
            <td>$time</td>
    </tr>
    ";
    echo $element;
}


