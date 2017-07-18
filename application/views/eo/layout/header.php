<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dinian - Event Organizer Bogor</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/agency.css') ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('eo') ?>">Dinian Event Organizer</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo ($this->uri->segment(1) == 'eo' AND $this->uri->segment(2) == '')? 'active' : ''; ?>">
                        <a href="<?php echo base_url('eo') ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('') ?>">Our Experience</a>
                    </li>
                    <li class="dropdown drophover <?php echo ($this->uri->segment(1) == 'eo' AND ($this->uri->segment(2) == 'events-gallery' OR $this->uri->segment(2) == 'girls-gallery'))? 'active' : ''; ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Galleries<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($this->uri->segment(1) == 'eo' AND $this->uri->segment(2) == 'girls-gallery')? 'active' : ''; ?>">
                                <a href="<?php echo base_url('eo/events-gallery') ?>">Event Galleries</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('') ?>">Girls Galleries</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('') ?>">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('') ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
