<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="menu">
    <ul>
    <li><a href="<?= URL ?>">Pradinis</a></li>
        <li><a href="<?= URL.'?action=new_user' ?>">Pridėti naują vartotoją</a></li>
    <ul>
<nav>
<?php
if (is_msg()) {
    require __DIR__ . '/msg.php';
}
