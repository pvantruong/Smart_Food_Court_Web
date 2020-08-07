<?php

function component($dishname, $price, $time){
    $element = "
    <tr>
            <td>$dishname</td>
            <td>$price</td>
            <td>$time</td>
    </tr>
    ";
    echo $element;
}


