
<?php 
$col1Count = ceil(count($users)/2);
$usersAry[] = array_slice($users, 0, $col1Count);
$usersAry[] = array_slice($users, $col1Count);
?>

<h2><?= $title ?></h2>

<div class="column-wrapper">
<?php foreach ($usersAry as $colUsers): ?>
  <div class="column">
    <div class="list-group">
      <?php foreach ($colUsers as $user): ?>
        <a class="list-group-item" href="/index.php/users/<?php echo $user['username'] ?>"><?php echo $user['name'] ?></a>
      <?php endforeach ?>
    </div>
  </div>
<?php endforeach ?>
</div>