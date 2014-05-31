<h2>Create a User Profile</h2>
<!-- <?php echo validation_errors() ?> -->

<!-- Using CodeIgniter 'form' helpers as much as possible here -->
<?php echo form_open('users/create', array('id' => 'userCreateForm')) ?>

<div class="form-group">
  <?php echo form_label('Full Name: ', 'name'); ?>
  <input type="text" name="name" class="form-control"
         id="name" placeholder="Full Name"
         value="<?php echo set_value('name'); ?>" />
  <?php echo form_error('name'); ?>
</div>
<div class="form-group">
  <?php echo form_label('Date of Birth', 'dob'); ?>
  <input type="date" name="dob" class="form-control"
         id="dob" placeholder="YYYY-MM-DD"
         value="<?php echo set_value('dob'); ?>" />
  <?php echo form_error('dob'); ?>
</div>
<div class="form-group">
  <?php echo form_label('Email', 'email'); ?>
  <input type="email" name="email" class="form-control"
         id="email" placeholder="Email"
         value="<?php echo set_value('email'); ?>" />
  <?php echo form_error('email'); ?>
</div>
<div class="form-group">
  <?php
  echo form_label('Favorite Color', 'fav_color'); ?>
  <input type="text" name="fav_color" class="form-control"
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

<?php echo form_close() ?>
