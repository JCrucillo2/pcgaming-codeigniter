<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php
            if(APP_NAME){
                $title = APP_NAME;
            } 
            if(isset($heading)) {
                $title = $title . " - " . $heading;
            }
            echo $title;
        ?>
    </title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- JS File -->
    <script src="<?php echo base_url(); ?>js/main.js" defer></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="<?php echo base_url(); ?>" class="navbar-brand"><i class="material-icons">home</i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <a href="<?php echo base_url() ?>" class="nav-link">Articles</a>
                    <?php if($this->ion_auth->logged_in()) : ?>
                        <?php
                            $user_id = $this->ion_auth->user()->row()->id;
                            $username = $this->ion_auth->user()->row()->username;
                        ?>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logged in as <span class="text-success"><?php echo $username ?></span></a>
                            <div class="dropdown-menu" aria-labelledby="navbarUser">
                                <a href="<?php echo base_url() ?>articles/write" class="dropdown-item">Write Article</a>
                                <a href="<?php echo base_url() ?>auth/change_password" class="dropdown-item">Change Password</a>
                                <a href="<?php echo base_url() ?>auth/logout" class="dropdown-item">Logout</a>
                            </div>
                        </li>

                        <?php else : ?>
                        <a href="<?php echo base_url() ?>auth/login" class="nav-link">Login</a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php $message = $this->session->flashdata('message'); ?>
        <?php if($message) : ?>
            <div class="alert alert-success my-2 alert-control" id="message"><?php echo $message; ?></div>
        <?php endif; ?>