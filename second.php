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

class FileManager
{
    public function readFile($filename)
    {
        // Читання файлу
        // визначення розширення $ext
        if ($ext === 'txt') {
            // Читання запису файлів типу txt
        } elseif ($ext === 'csv') {
            // Читання запису файлів типу csv
        } else {
            //  Читання запису файлів інших типів
        }
    }

    public function writeFile($filename, $data)
    {
        // Запис даних в файл
        // визначення розширення $ext
        if ($ext === 'txt') {
            // функціонал запису файлів типу txt
        } elseif ($ext === 'csv') {
            // функціонал запису файлів типу csv
        } else {
            //  функціонал запису файлів інших типів
        }
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