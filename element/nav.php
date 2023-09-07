<?php $username = $this->Identity->get('username'); ?>
<?php $name = $this->Identity->get('name'); ?>
<?php $userid = $this->Identity->get('id'); ?>
<?php $profileid = $this->Identity->get('profile_id'); ?>
<?php $roleid = $this->Identity->get('role_id'); ?>
<nav class="navbar navbar-expand-lg navbar-light ">

<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mx-auto">

    <li class="nav-item active">    
        <?php if($username): ?>
          <a class="nav-link" href="/news/home">Home</a>          
        <?php endif; ?>
    </li>
    <li class="nav-item">
      <?php if(($username) && ( $profileid != 6) && ($profileid != 3) ): ?>
        <a class="nav-link" href="/dashboards/index">Painel Principal</a>                  
      <?php endif; ?>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/news/about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/agendas/index">Agenda</a>          
    </li>
    <li class="nav-item">
      <?php if(is_null($username)): ?>
        <a class="nav-link" href="/login">Login</a>          
      <?php endif; ?>
    </li>
    <li class="nav-item">
            <?php if($username): ?>
            <a class="nav-link" href="#"><?= $name; ?></a>
            <?php endif; ?>
    </li>
    <li class="nav-item">
            <?php if($username): ?>            
            <a class="nav-link" href="eventos/logout">Logout</a>          
            <?php endif; ?>
    </li>
    </li>
  </ul>
</div>

</nav>
