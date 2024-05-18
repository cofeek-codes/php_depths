<?php

class User
{
    public string $login;
    public string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function ShowPassword() {
        echo "У пользователя с логином {$this->login} пароль - {$this->password}";
    }
}

$u1 = new User("somelogin", "12345");

$u1->ShowPassword();
