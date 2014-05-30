<article>
  <h2><?php echo $user['name'] ?></h2>
  <ul>
    <li>
      <strong>Email</strong>:
      <a href="mailto:<?php echo $user['email'] ?>">
        <?php echo $user['email'] ?>
      </a>
    </li>
    <li>
      <strong>Date of Birth</strong>: <?php echo $user['dob'] ?>
    </li>
    <li>
      <strong>Favorite Color</strong>: <?php echo $user['fav_color'] ?>
    </li>
  </ul>
</article>
