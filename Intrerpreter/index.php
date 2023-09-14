<?php

namespace Interpreter;

print('BEGIN TESTING INTERPRETER PATTERN') . PHP_EOL;

//load Books for test data
$books = new Books();
$inBook1 = new Book('PHP for Cats', 'Larry Truett');
$inBook2 = new Book('MySQL for Cats', 'Larry Truett');
$books->addBook($inBook1);
$books->addBook($inBook2);

$interpreter = new Interpreter($books);

print('test 1 - invalid request missing "book"') . PHP_EOL;
print($interpreter->interpret('author 1')) . PHP_EOL;

print('test 2 - valid book author request') . PHP_EOL;
print($interpreter->interpret('book author 1')) . PHP_EOL;

print('test 3 - valid book title request') . PHP_EOL;
print($interpreter->interpret('book title 2')) . PHP_EOL;

print('test 4 - valid book author title request') . PHP_EOL;
print($interpreter->interpret('book author title 1')) . PHP_EOL;

print('test 5 - invalid request with invalid book number') . PHP_EOL;
print($interpreter->interpret('book title 3')) . PHP_EOL;

print('test 6 - invalid request with nuo numeric book number') . PHP_EOL;
print($interpreter->interpret('book title one')) . PHP_EOL;

print('END TESTING INTERPRETER PATTERN');
