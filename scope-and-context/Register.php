<?php

namespace Bcme;

class Register
{
    public function execute(array $users, RespondToUserRegister $listener)
    {
        $listener->userRegisteredSuccessfully();
    }
}
