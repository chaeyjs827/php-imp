<?php




namespace firstNamespacetest;

function hello() {
    echo 'firstNamespaceTest 입니다<br>';
}

namespace secondNamespaceTest;

function hello() {
    echo 'secondNamespaceTest 입니다<br>';
}

\secondNamespaceTest\hello();
\firstNamespacetest\hello();