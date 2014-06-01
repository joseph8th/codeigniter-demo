<h2>Add User</h2>

<!-- div for AJAX success message -->
<div id="success">
  <h2>Congratulations!</h2>
  <p>User successfully created.</p> 
</div>

<div id="userCreate">

  <!-- Using CodeIgniter 'form' helpers as much as possible here -->
  <?php echo form_open('users/create', array('id' => 'userCreateForm')) ?>

  <?php echo form_fieldset('User Profile') ?>
  
  <div class="form-group">
    <?php echo form_label('Full Name: ', 'name'); ?>
    <input type="text" name="name" class="name form-control"
           id="name" placeholder="Full Name"
           value="<?php echo set_value('name'); ?>" />
    <?php echo form_error('name'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Date of Birth', 'dob'); ?>
    <input type="date" name="dob" class="dob form-control"
           id="dob" placeholder="YYYY-MM-DD or MM/DD/YYYY"
           value="<?php echo set_value('dob'); ?>" />
    <?php echo form_error('dob'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Email', 'email'); ?>
    <input type="email" name="email" class="email form-control"
           id="email" placeholder="Email"
           value="<?php echo set_value('email'); ?>" />
    <?php echo form_error('email'); ?>
  </div>
  <div class="form-group">
    <?php
    echo form_label('Favorite Color', 'fav_color'); ?>
    <input type="text" name="fav_color" class="fav_color form-control"
           id="fav_color" placeholder="Color"
           value="<?php echo set_value('fav_color'); ?>"/>
    <?php echo form_error('fav_color'); ?>
  </div>
  
  <?php echo form_submit(array('type' => 'submit',
                               'name' => 'addUser',
                               'id' => 'submit',
                               'class' => 'btn btn-primary',
                               'value' => 'Add User'
                               )); ?>

  <div class="loading"></div>
  
  <?php echo form_fieldset_close() ?>

  <?php echo form_close() ?>

</div>
