<?php
require '../vendor/autoload.php';
$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
$loader = new \Twig\Loader\FilesystemLoader('../src/views');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
    'debug' => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render('index.html.twig',array('products'=>$products));
