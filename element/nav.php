<?php $username = $this->Identity->get('username'); ?>
<?php $name = $this->Identity->get('name'); ?>
<?php $userid = $this->Identity->get('id'); ?>
<?php $profileid = $this->Identity->get('profile_id'); ?>
<?php $roleid = $this->Identity->get('role_id'); ?>
<nav class="navbar navbar-expand-lg navbar-light ">

<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mx-auto">

    <li class="nav-item">                       
      <?= $this->Html->link('Home',['controller'=> 'News','action'=>'home'],['type'=>'button','class' => 'btn btn-link'])  ?>       
    </li>    
        
    
    <li class="nav-item">
      <?php if(($username) && ( $profileid != 6) && ($profileid != 3) ): ?>
        <a class="nav-link" href="/dashboards/index">Painel Principal</a>                  
      <?php endif; ?>
    </li>
    <li class="nav-item">      
      <?= $this->Html->link('Nossas Igrejas',['controller'=> 'News','action'=>'about'],['type'=>'button','class' => 'btn btn-link'])  ?>       
    </li>    
    <li class="nav-item">
      <!-- <a class="nav-link" href="/agendas/index">Agenda</a>     -->     
      <?= $this->Html->link('Agenda',['controller'=> 'Agendas','action'=>'index'],['type'=>'button','class' => 'btn btn-link'])  ?>       
    </li>
    <li class="nav-item">
      <?php if(is_null($username)): ?>
        <!--<a class="nav-link" href="/users/login">Login</a>  -->
        <?= $this->Html->link('Login',['controller'=> 'Users','action'=>'login'],['type'=>'button','class' => 'btn btn-link'])  ?>       
      <?php endif; ?>
    </li>
    <li class="nav-item">
            <?php if($username): ?>
            <a class="nav-link" href="#"><?= $name; ?></a>
            <?php endif; ?>
    </li>
    <li class="nav-item">
            <?php if($username): ?>            
            <!-- <a class="nav-link" href="eventos/logout">Logout</a>   -->
            <?= $this->Html->link('Logout',['title' => 'Login','controller'=> 'Users','action'=>'logout'],['class'=>'btn btn-outline-secondary']) ?>       
            <?php endif; ?>
    </li>
    </li>
  </ul>
</div>

</nav>
