<?php


namespace App\classes;


class Sen
{
        public function findWordCharecter(){
            $data=(object)$_POST;
            $givenString=$data->given_string;
            $result=[];
            $result['totalWord']=str_word_count($givenString);
            $result['totalCharecter']=strlen($givenString);
            return $result;

        }
}