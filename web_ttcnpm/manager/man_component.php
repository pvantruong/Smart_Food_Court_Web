<?php

function component($dishname, $price, $time){
    $element = "
    <tr>
            <td>$dishname</td>
            <td>$time</td>
            <td>$price</td>
    </tr>
    ";
    echo $element;
}


