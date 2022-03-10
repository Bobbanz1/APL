<?php

$task = [
  'title' => 'Cleaning',
  'due' => '2022-03-14',
  'assigned_to' => 'Rover',
  'completed' => true
]; //title, due, asssigned_to, completed

$new_tasks = [
  'title' => 'PHP Learning',
  'due' => '2022-03-20',
  'assigned_to' => 'Rover',
  'completed' => false
];


//var_dump($task);

require 'conditions.view.php';
