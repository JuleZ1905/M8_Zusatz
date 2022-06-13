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

    public static function addMessage($message)
    {
        require('db/db.php');
        $querybuilder = $conn->createQueryBuilder();
        if (!Message::checkDuplicate($message)) {
            $querybuilder->insert('fortune_message')
            ->setValue('message', '?')
            ->setParameter(0, $message);
            $querybuilder->execute();
            return true;
        } else {
            return false;
        }
    }

    public static function checkDuplicate($message)
    {
        require('db/db.php');
        $querybuilder = $conn->createQueryBuilder();
        $querybuilder->select('message')
            ->from('fortune_message')
            ->where('message = :message')
            ->setParameter('message', $message);
        $statement = $querybuilder->execute();
        $row = $statement->fetch();
        if ($row) {
            return true;
        } else {
            return false;
        }
    }

    public function getMessage()
    {
        return $this->message;
    }
}
