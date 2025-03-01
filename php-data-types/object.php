<?php

class User {
    public string $name;
    public string $username;

    public function __construct(string $name, string $username) {
        $this->name = $name;
        $this->username = $username;
    }

    public function showInfo(): string {
        return "Nama: " . $this->name . ", Username: " . $this->username;
    }
}

$user1 = new User("Kenji", "kenji456");
echo $user1->showInfo() . PHP_EOL;

var_dump($user1);