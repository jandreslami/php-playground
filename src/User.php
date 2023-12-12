<?php
class User
{
    private int $userId;
    private string $email;
    private \DateTimeInterface $createdAt;
    private \DateTimeInterface $updatedAt;
    private string $username;

    public function __construct(int $userId, string $email, \DateTimeInterface $createdAt, \DateTimeInterface $updatedAt, string $username)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->username = $username;
    }
    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId)
    {
        //validation here also could be done
        $this->userId = $userId;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }

    //plus more setters and getters
}



//in PHP 8.0 there is a less verbose alternative for the constructor:
class User
{
    public function __construct(
        private int $userId,
        private string $email,
        private \DateTimeInterface $createdAt,
        private \DateTimeInterface $updatedAt,
        private string $username
    ) {
    }
    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId)
    {
        //validation here also could be done
        $this->userId = $userId;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }

    //plus more setters and getters
}



//now practice "magic" getters and setters (maybe used when validation is not really in the class definition?)

// class User
// {

//     private int $userId;
//     private string $email;
//     private \DateTimeInterface $createdAt;
//     private \DateTimeInterface $updatedAt;
//     private string $username;

//     public function __get($key)
//     {
//         return $this->$key;
//     }

//     public function __set($key, $value)
//     {
//         $this->$key = $value;
//     }
// }
