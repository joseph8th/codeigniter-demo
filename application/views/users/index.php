<ul>
<?php foreach ($users as $user): ?>
  <li>
    <a href="<?php echo $user['username'] ?>">
      <?php echo $user['name'] ?>
    </a>
  </li>
<?php endforeach ?>
</ul>

