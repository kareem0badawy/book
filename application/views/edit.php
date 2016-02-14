<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Library</title>

    <!-- Bootstrap core CSS -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('styles/bootstrap.css')?>">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('styles/cover.css')?>">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('styles/Copybootstrap.css')?>">

 
</head>


<body>


<!--Start Navbar-->

<nav class="navbar navbar-default navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Library.<span>com</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
        </div>

    </div>
</nav>
<body>
<?php if ($result):?>
<?php foreach($result as $row) :?>


    <!--Forms bootstrap-->
<form class="form-horizontal" action="<?php echo site_url("Welcome/updatebook/$id");?>" method="post">

    <!-- Text Title-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Title</label>
        <div class="col-md-4">


            <input id="textinput" name="title" type="text" value="<?php echo $row->title ;?>" placeholder="title" class="form-control input-md">
        </div>
    </div>

    <!-- Text Author-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Author</label>
        <div class="col-md-4">
            <input id="textinput" name="author" type="text" value="<?php echo $row->author ;?>" class="form-control input-md">

        </div>
    </div>

    <!-- Button Add-->
    <div class="form-group">

        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <input type="submit" id="singlebutton" name="edit" class="btn btn-primary"></input>
        </div>
    </div>
<?php endforeach;?>
<?php endif;?>
</body>
</html>