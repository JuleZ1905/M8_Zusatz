<?php

namespace Julian\Aufgabe;

class Message
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public static function getRandomMessage()
    {
        require('db/db.php');
        $querybuilder = $conn->createQueryBuilder();
        $querybuilder->select('message')
            ->from('fortune_message');
        $statement = $querybuilder->execute();
        $messages = [];
        while ($row = $statement->fetch()) {
            $messages[] = new Message($row['message']);
        }
        return $messages[array_rand($messages)];
    }

    public function getMessage()
    {
        return $this->message;
    }
}
