<?php
$employee = [
  'name' => 'John',
  'email' => 'john@example.com',
  'phone' => '1234567890',
  'hobbies' => ['Football', 'Tennis'],
  'profiles' => ['facebook' => 'johnfb', 'twitter' => 'johntw']
];
// access hobbies 
echo $employee['hobbies'][0];
echo '<br>';
// Football 
echo $employee['hobbies'][1];
echo '<br>';

// Tennis 
// access profiles 
echo $employee['profiles']['facebook'];
echo '<br>';

// johnfb 
echo $employee['profiles']['twitter'];
echo '<br>';

// johntw 
?>