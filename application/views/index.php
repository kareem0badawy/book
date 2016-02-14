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

<table>

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Status</th>
        <th>Edit||Delete</th>
    </tr>
</table>

<table>
<?php

 foreach($show as $key => $row): ?>
    <tr>
        <td>
            <?php echo ++$key ?> 
        </td>
            <td><?php echo $row->title ?>
        </td>
        <td>
            <?php echo $row->author ?>
        </td>
        <td>
            <?php if($row->active == 0): ?>
                <a href="<?php echo base_url('Welcome/active/'.$row->id) ?>">Active</a>
            <?php else: ?>
                <a href="<?php echo base_url('Welcome/unactive/'.$row->id) ?>">UnActive</a>
            <?php endif; ?>
                  <td>
                <a class="btn btn-warning" href="<?php echo base_url('Welcome/updatebook/'.$row->id)?>">Edit</a>||
                <a class="btn btn-danger"  href="<?php echo site_url("Welcome/delete/".$row->id)?>">Delete</a>
            </td>
              <?php endforeach; ?>
        </td>
       
            
    </tr>



</table>






<script src="<?php echo base_url('styles/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('styles/js/jquery-1.12.0.min.js')?>"></script>

</body>
</html>






