<h2>Create a User Profile</h2>

<?php echo validation_errors() ?>

<!-- Using CodeIgniter 'form' helpers as much as possible here -->
<?php echo form_open('users/create', array('id' => 'userCreateForm')) ?>

<div class="form-group">
  <?php
  echo form_label('Full Name: ', 'inputName');
  echo form_input(array(
    'name' => 'name',
    'type' => 'text',
    'class' => 'form-control',
    'id' => 'inputName',
    'placeholder' => 'Full Name'
  ));
  ?>
</div>
<div class="form-group">
  <?php
  echo form_label('Date of Birth', 'inputDOB');
  echo form_input(array(
    'name' => 'dob',
    'type' => 'date',
    'class' => 'form-control',
    'id' => 'inputDOB',
    'placeholder' => 'Date of Birth'
  ));
  ?>
</div>
<div class="form-group">
  <?php
  echo form_label('Email', 'inputEmail');
  echo form_input(array(
    'name' => 'email',
    'type' => 'email',
    'class' => 'form-control',
    'id' => 'inputEmail',
    'placeholder' => 'Email'
  ));
  ?>
</div>
<div class="form-group">
  <?php
  echo form_label('Favorite Color', 'inputFavColor');
  echo form_input(array(
    'name' => 'fav_color',
    'type' => 'text',
    'class' => 'form-control',
    'id' => 'inputFavColor',
    'placeholder' => 'Favorite Color'
  ));
  ?>
</div>

<button type="submit" class="btn btn-primary">Add User</button>

<?php echo form_close() ?>
