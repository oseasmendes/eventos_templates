<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'SaesChurch-Services Portal';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?php $newpath = $this->Html->image('saeschurch.png', ['class'=>'rounded float-left','width'=>'300px','alt' => 'saeschurch']);
            $pathimage = $newpath;           
    ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span><?php echo $pathimage; ?></span></a>
        </div>
        <div class="top-nav-links">
            <!-- <a target="_blank" rel="noopener" href="/">Home</a> -->
            <?= $this->Html->link("Home",['controller'=>'News','action'=>'home']) ?>
            <?= $this->Html->link("Agenda",['controller'=>'Agendas','action'=>'index']) ?>
            <?php $username = $this->Identity->get('username'); ?>
            <?php $name = $this->Identity->get('name'); ?>            
            <?php $userid = $this->Identity->get('id'); ?>

            <?php if(!empty($username)): ?>
            <a target="_blank" rel="noopener" href="#"><?= $name; ?></a>
            <?= $this->Html->link("Logout",['controller'=>'Users','action'=>'logout']) ?>
            <?php endif; ?>            
            <!-- <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a> -->
            <!-- <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a> -->
            
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
