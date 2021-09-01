<?php
function test() {
    echo '1<br>';
    echo '2<br>';

    yield 'gene1<br>';

    echo '3<br>';
    echo '4<br>';

    yield 'gene2<br>';

    echo '5<br>';
    echo '6<br>';
}


foreach(test() as $value){
    echo $value;
}