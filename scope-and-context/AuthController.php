<?php

namespace Bcme;

class AuthController implements RespondToUserRegister {
    protected $registeration;

    public function __construct(Register $registeration)
    {
        $this->registeration = $registeration;
    }

    public function register() {
        $this->registeration->execute([], $this);
    }

    public function userRegisteredSuccessfully() {
        echo 'User registered successfully.';
    }

    public function userRegisteredFailed() {
        echo 'User registered failed';
    }
}