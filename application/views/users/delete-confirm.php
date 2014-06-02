<h2><?= $title ?></h2>

<h3>Are you SURE you want to delete user '<?= $user['name'] ?>'?</h3>

<?php 
echo form_open('users/delete/'.$user['username'],
               array('id' => 'confirmDeleteForm'));

echo form_button(array('type' => 'submit',
                       'name' => 'confirm',
                       'id' => 'confirm',
                       'class' => 'btn btn-primary',
                       'content' => 'Confirm'
                       ));

echo form_button(array('type' => 'cancel',
                       'name' => 'cancel',
                       'id' => 'cancel',
                       'class' => 'btn',
                       'content' => 'Cancel'
                       ));
echo form_close();
?>
