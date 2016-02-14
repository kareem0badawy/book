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
                <li class="active"><a href="<?php echo site_url("Welcome/index")?>">Home</a></li>
                <li><a href="<?php echo site_url("Welcome/ShowAll")?>">Show All</a></li>
                <li><a href="<?php echo site_url("Welcome/AddNew")?>">Add New</a></li>
            </ul>


        </div>
    </div>
</nav>

<!--form-ADD-->
<form class="form-horizontal" action="" method="post">
    <fieldset>


        <div class="clear"><br/><br/></div>

        <!-- Text Title-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Title</label>
            <div class="col-md-4">
                <input id="textinput" name="title" type="text" placeholder="title" class="form-control input-md">
            </div>
        </div>

        <!-- Text Author-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Author</label>
            <div class="col-md-4">
                <input id="textinput" name="author" type="text" placeholder="author" class="form-control input-md">
            </div>
        </div>

        <!-- Select Active Or Un Active -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
            <div class="col-md-4">
                <select id="selectbasic" name="active" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Un Active</option>

                </select>
            </div>
        </div>

        <!-- Button Add -->
        <div class="form-group">

            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button type="submit" id="singlebutton" name="submit" class="btn btn-primary">AddNew</button>
            </div>
        </div>

    </fieldset>
</form>


<script src="<?php echo base_url('styles/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('styles/js/jquery-1.12.0.min.js')?>"></script>

</body>
</html>






