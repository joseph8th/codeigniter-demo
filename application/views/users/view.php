<article>
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
</article>
