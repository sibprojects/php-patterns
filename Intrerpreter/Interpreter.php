<?php

namespace Interpreter;

class Interpreter
{
    private Books $books;

    public function __construct($booksIn)
    {
        $this->books = $booksIn;
    }

    public function interpret($stringIn)
    {

        $arrayIn = explode(" ", $stringIn);
        $returnString = NULL;

        if ('book' == $arrayIn[0]) {
            if ('author' == $arrayIn[1]) {
                if (is_numeric($arrayIn[2])) {
                    $book = $this->books->getBook($arrayIn[2]);
                    if (NULL == $book) {
                        $returnString = 'Can not process, there is no book # ' . $arrayIn[2];
                    } else {
                        $returnString = $book->getAuthor();
                    }
                } elseif ('title' == $arrayIn[2]) {
                    if (is_numeric($arrayIn[3])) {
                        $book = $this->books->getBook($arrayIn[3]);
                        if (NULL == $book) {
                            $returnString = 'Can not process, there is no book # ' .
                                $arrayIn[3];
                        } else {
                            $returnString = $book->getAuthorAndTitle();
                        }
                    } else {
                        $returnString = 'Can not process, book # must be numeric.';
                    }
                } else {
                    $returnString = 'Can not process, book # must be numeric.';
                }
            }
            if ('title' == $arrayIn[1]) {
                if (is_numeric($arrayIn[2])) {
                    $book = $this->books->getBook($arrayIn[2]);
                    if (NULL == $book) {
                        $returnString = 'Can not process, there is no book # ' .
                            $arrayIn[2];
                    } else {
                        $returnString = $book->getTitle();
                    }
                } else {
                    $returnString = 'Can not process, book # must be numeric.';
                }
            }
        } else {
            $returnString = 'Can not process, can only process book author #,  book title #, or book author title #';
        }
        return $returnString;
    }
}
