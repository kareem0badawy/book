<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Cover Template for Bootstrap</title>

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
                <li class="active"><a href="<?php echo site_url("Welcome/index")?>"><span class="glyphicon glyphicon-home">Home</span></a></li>
                <li><a href="<?php echo site_url("Welcome/ShowAll")?>"><span class="glyphicon glyphicon-eye-open">Show All</span></a></li>
                <li><a href="<?php echo site_url("Welcome/AddNew")?>"><span class="glyphicon glyphicon-paperclip">Add New</span></a></li>
            </ul>
        </div>

    </div>
</nav>

<table>

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Status</th>
        <th>Edit||Delete</th>
    </tr>
 <?php
 error_reporting("E_ALL & ~E_NOTIC");
$id=1;
 if($_GET['box']=='active')
 {
     $id = intval($_GET['id']);

     //header('Location:index.php');
 }

 //Edite Books
 elseif($_GET['box']=='edit')
 {
  ?>
    <!--Forms bootstrap-->
    <form class="form-horizontal" action="" method="post">-->

        <!--  Text Title-->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textinput">Title</label>
               <div class="col-md-4">
                   <input id="textinput" name="title" type="text" value="" placeholder="title" class="form-control input-md">
               </div>
           </div>

           <!--  Text Author-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Author</label>
                <div class="col-md-4">
                    <input id="textinput" name="author" type="text" value ="" placeholder="author" class="form-control input-md">
                </div>
            </div>

            <!-- Button Add-->
    <div class="form-group">

        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <button id="singlebutton" name="Edit" class="btn btn-primary">Edit</button>
        </div>
    </div>
 <?php

 }
    foreach($show as $row)
    {
       // echo $id=$row->id;
       // $id++;
        if ($row->active == 0)
        {

        echo
             ' <tr>'
            . '<td>' .$id++ . '</td>'
            . '<td>' . $row->title . '</td>'
            . '<td>' . $row->author . '</td>'
            . '<td>' . "<a href=\"index.php?box=active&id={$row->id}\">Active</a>" . '</td>'
            . '<td>' . "<a href=\"index.php?box=edit&id={$row->id}\">Edite</a>" . '||' .
                    "<a href=\"index.php?box=delete&id={$row->id}\">Delete</a>" . '</td>';

    }
        elseif($row->active == 1)
        {
            echo
            ' <tr>'
                .'<td>' .$id++. '</td>'
                . '<td>' . $row->title . '</td>'
                . '<td>' . $row->author . '</td>'
                . '<td>' . "<a href=\"index.php?box=UnActive&id={$row->id}\">UnActive</a>" . '</td>'
                . '<td>' . "<a href=\"index.php?box=edit&id={$row->id}\">Edite</a>" . '||' .
                "<a href=\"index.php?box=delete&id={$row->id}\">Delete</a>" . '</td>'
                . '</tr>';
            <a href="<?php echo site_url("welcome/index/".$row->id)?>"> UnActive </a>
        }

    }
?>

</table>

    <!--Forms bootstrap
<form class="form-horizontal" action="" method="post">-->

    <!-- Text Title
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Title</label>
        <div class="col-md-4">
            <input id="textinput" name="title" type="text" value="" placeholder="title" class="form-control input-md">
        </div>
    </div>
-->
    <!-- Text Author
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Author</label>
        <div class="col-md-4">
            <input id="textinput" name="author" type="text" value ="" placeholder="author" class="form-control input-md">
        </div>
    </div>
-->
    <!-- Button Add
    <div class="form-group">

        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <button id="singlebutton" name="Edit" class="btn btn-primary">Edit</button>
        </div>
    </div>
-->

<script src="<?php echo base_url('styles/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('styles/js/jquery-1.12.0.min.js')?>"></script>

</body>
</html>






