<?php

class DataManager
{
    public function saveData($data)
    {
        // Збереження даних в базі даних
    }
}

class DataDisplay
{
    public function displayData($data)
    {
        // Відображення даних на веб-сторінці
    }
}

class User
{
    public function authenticate($username, $password, $role)
    {
        // Логіка аутентифікації користувача
    }

}

class UserView
{
    public function displayProfile($userId)
    {
        // Відображення профілю користувача
    }
}

class Order
{
    public function processOrder($orderData)
    {
        // Обробка замовлення
    }
}

class DisplayOrder
{
    public function displayOrderInfo($orderId)
    {
        // Відображення інформації про замовлення
    }
}

class FileManager
{
    public array $data;
    public function readFile(FileInterface $filename)
    {
        $filename->read();
    }

    public function writeFile(FileInterface $filename, array $data)
    {
        $filename->write($this->data = $data);
    }
}

interface FileInterface
{
    public function read(): FileInterface;

    public function write(array $data);
}

class FileTXT implements FileInterface
{
    public function read(): FileInterface
    {
        echo 'read file txt';
        return $this;
    }

    public function write(array $data)
    {
        echo 'write file txt';
    }
}

class FileCSV implements FileInterface
{
    public function read(): FileInterface
    {
       echo 'read file csv';
       return $this;
    }

    /**
     * @return mixed
     */
    public function write(array $data)
    {
        echo 'write file csv';
    }

}