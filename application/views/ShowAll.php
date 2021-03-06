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
<table border="1">

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
    </tr>


<?php

 foreach($book as $key => $row): ?>
    <tr>
        <td>
            <?php echo ++$key ?> 
        </td>
            <td><?php echo $row->title ?>
        </td>
        <td>
            <?php echo $row->author ?>
        </td>

<?php endforeach ?>
</table>


<script src="<?php echo base_url('styles/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('styles/js/jquery-1.12.0.min.js')?>"></script>

</body>
</html>

