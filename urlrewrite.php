<?php
$arUrlRewrite=array (
  10 => 
  array (
    'CONDITION' => '#^/test/([0-9a-zA-Z-]+?)/#',
    'RULE' => 'news=$1',
    'ID' => '',
    'PATH' => '/test.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/news/([0-9a-zA-Z-]+?)/#',
    'RULE' => 'news=$1',
    'ID' => 'digital:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/test/#',
    'RULE' => '',
    'ID' => 'digital:news',
    'PATH' => '/test.php',
    'SORT' => 100,
  ),
);
