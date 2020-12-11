<!doctype html>
<html lang="en">
<head>
    <title>Test Final by TAM LE C0920K1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet"
          href="<?php echo \MVCFinalTamLe\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/dark.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo \MVCFinalTamLe\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/font-icons.css"
          type="text/css"/>

    <style>
        #footer {
            position: relative;
            background-color: #EEE;
            border-top: 5px solid rgba(0, 0, 0, 0.2);
        }

        #copyrights {
            padding: 40px 0;
            background-color: #DDD;
            font-size: 0.875rem;
            line-height: 1.8;
        }

        #copyrights i.footer-icon {
            position: relative;
            top: 1px;
            font-size: 0.875rem;
            width: 14px;
            text-align: center;
            margin-right: 3px;
        }

        .copyright-links a {
            display: inline-block;
            margin: 0 3px;
            color: #333;
            border-bottom: 1px dotted #444;
        }

        .copyright-links a:hover {
            color: #555;
            border-bottom: 1px solid #666;
        }

        .copyrights-menu {
            margin-bottom: 10px;
        }

        .copyrights-menu a {
            font-size: 0.875rem;
            margin: 0 10px;
            border-bottom: 0 !important;
        }

        #copyrights a:first-child {
            margin-left: 0;
        }

        #copyrights.text-right a:last-child {
            margin-right: 0;
        }

        .footer-logo {
            display: block;
            margin-bottom: 30px;
        }
    </style>

</head>
<body>
<header class="section-header py-2">
    <div class="container py-12">
        <h2>Final Exam Module 2 - Codegym.vn</h2>
    </div>
</header> <!-- section-header.// -->

<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Final Exam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo \MVCFinalTamLe\controllers\UrlControllers::url() ?>">Home <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="<?php echo \MVCFinalTamLe\controllers\UrlControllers::url("add") ?>">Add</a>
                </li>
            </ul>
            <form method="post" action="<?php echo \MVCFinalTamLe\controllers\UrlControllers::url() ?>/search"
                  class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section class="section-content py-5">



