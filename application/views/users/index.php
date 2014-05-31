<h2><?= $title ?></h2>
<div class="list-group">
<?php foreach ($users as $user): ?>
  <a class="list-group-item" href="/index.php/users/<?php echo $user['username'] ?>">
    <?php echo $user['name'] ?>
  </a>
<?php endforeach ?>
</div>

