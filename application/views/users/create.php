<h2>Create a User Profile</h2>

<?php

echo validation_errors();

echo form_open('users/create');

echo form_label('Full Name: ');
echo form_input('name') . "<br>";

echo form_label('Email: ');
echo form_input('email') . "<br>";

echo form_label('Date of Birth: ');
echo form_input('dob') . "<br>";

echo form_label('Favorite Color: ');
echo form_input('fav_color') . "<br>";

echo form_submit('adduser', 'Add User');

echo form_close();

?>
