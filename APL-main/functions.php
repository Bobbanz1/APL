<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</prev>';
}

$age = false;

function agecheck(int $age): bool
{
  return ($age >= 21);
}
