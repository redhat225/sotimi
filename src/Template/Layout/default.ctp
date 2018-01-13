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
 */

$pageDescription = 'SOTIMI';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $pageDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600|Montserrat:400,600|Open+Sans:400,600" rel="stylesheet">
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css('../node_modules/bulma/custom-bulma') ?>

    <link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('../node_modules/toastr/build/toastr.min') ?>
    <?= $this->fetch('css') ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->fetch('content') ?>
    <!-- Load additional dependencies -->
    <?= $this->Html->script('../node_modules/angular/angular.min') ?>
    <?= $this->Html->script('../node_modules/toastr/build/toastr.min') ?>
</body>
</html>
