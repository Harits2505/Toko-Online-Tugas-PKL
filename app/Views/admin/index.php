<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">User List</h1>
<a class="btn btn-primary" href="http://localhost/phpmyadmin/index.php?route=/table/change&db=ci4login&table=auth_groups_users" role="button"><i class="fas fa-user-plus"></i> Add Admin</a>
<div class="row"> 
    <div class="col-lg-14">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; ?>
  <?php foreach($users as $user) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $user->username;?></td>
      <td><?= $user->fullname;?></td>
      <td><?= $user->email;?></td>
      <td><?= $user->name;?></td>
      <td><?= $user->phonenumber;?></td>
      <td><?= $user->alamat; ?></td>
    <?php endforeach;?>
    </tr>
  </tbody>
</table>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
