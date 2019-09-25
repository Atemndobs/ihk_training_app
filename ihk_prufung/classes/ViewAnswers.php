<?php
/**
 * Created by PhpStorm.
 * User: ATM
 * Date: 2019-08-08
 * Time: 23:50
 */

class ViewAnswers extends Answers
{
    protected  function ShowAnswers()
    {
        $datas = $this->getAnswers();
        foreach ($datas as $data){
            echo $data['question'].'<br>';
            echo $data['answer'].'<br>';
            echo $data['response'].'<br>';
            echo $data['hash_answer'].'<br>';
        }

    }

}