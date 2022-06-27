<?php

namespace Bcme;

interface RespondToUserRegister
{
    public function userRegisteredSuccessfully();
    public function userRegisteredFailed();
}
