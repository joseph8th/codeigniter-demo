<h2><?= $user['name'] ?></h2>

<ul class="list-group">
  <li class="list-group-item">
    <strong>Email</strong>:
    <a href="mailto:<?php echo $user['email'] ?>">
      <?php echo $user['email'] ?>
    </a>
  </li>
  <li class="list-group-item">
    <strong>Date of Birth</strong>: <?php echo $user['dob'] ?>
  </li>
  <li class="list-group-item">
    <strong>Favorite Color</strong>: <?php echo $user['fav_color'] ?>
  </li>
</ul>

<?php echo form_open('users/' . $user['username'],
                     array('id' => 'userActionForm')) ?>

<div class="form-group">
   <?php
   echo form_dropdown('user_action',
                      array('edit' => 'Edit', 'delete' => 'Delete'),
                      'edit');
   ?>
</div>

<?php 
echo form_submit(array('type' => 'submit',
                       'name' => 'userAction',
                       'id' => 'submit',
                       'class' => 'btn btn-primary',
                       'value' => 'Perform Action'
                       ));
?>

<?php echo form_close() ?>
