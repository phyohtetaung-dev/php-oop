<?php

interface Logger
{
    public function execute($message);
}

class FileLogger implements Logger
{
    public function execute($message)
    {
        echo 'Log the message to a file: ' . $message;
    }
}

class DatabaseLogger implements Logger
{
    public function execute($message)
    {
        echo 'Log the message to a database: ' . $message;
    }
}

class UserController {
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show() {
        $user = 'John Doe';

        $this->logger->execute($user);
    }
}

$user = new UserController(new DatabaseLogger);
$user->show();
