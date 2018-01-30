<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>7 Grand</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700" rel="stylesheet">
        <!-- boostrap 4 -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
        
        <!-- boostrap 4 -->     
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">   
        <?php
        if (isset($link_tag)) {
		    echo $link_tag;
		}
        ?>
    </head>

    <body class="page-<?= $this->router->fetch_method();?>">
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary sticky-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url().'home'; ?>" title="Home page">
                <img src="<?php //echo base_url().ASSETS_PATH.'img/logo.png'; ?>" height="45" class="align-top" alt="7grand">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Advertise</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi, Full name
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Logout</a>
                            <a class="dropdown-item" href="#">My Account</a>
                            <a class="dropdown-item" href="<?= base_url().'dashboard'; ?>">My Post</a>
                            <a class="dropdown-item" href="#">Profile Action 1</a>
                            <a class="dropdown-item" href="#">Profile Action 2</a>
                            <a class="dropdown-item" href="#">Profile Action 3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Page demo
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="<?= base_url().'home'; ?>">Home</a>
                            <a class="dropdown-item" href="<?= base_url().'search'; ?>">Search Result List Style</a>
                            <a class="dropdown-item" href="<?= base_url().'search2'; ?>">Search Result Grid Style</a>
                            <a class="dropdown-item" href="<?= base_url().'dashboard'; ?>">Dashboard</a>
                            <a class="dropdown-item" href="<?= base_url().'login'; ?>">Login</a>
                            <a class="dropdown-item" href="<?= base_url().'register'; ?>">Register</a>
                            <a class="dropdown-item" href="<?= base_url().'create-post'; ?>">Post</a>
                            <a class="dropdown-item" href="<?= base_url().'contact'; ?>">Contact</a>
                            <a class="dropdown-item" href="<?= base_url().'sell'; ?>">Sell</a>
                            <a class="dropdown-item" href="<?= base_url().'adv'; ?>">Advertise</a>
                        </div>
                    </li>
                </ul>
                <span class="navbar-text mr-3">
                    Chèn chữ hoặc quảng cáo nếu muốn
                </span>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
