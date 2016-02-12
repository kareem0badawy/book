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
<table border="1">

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
    </tr>


<?php
$id=1;
    foreach($book as $row)
{
    echo
        ' <tr>'
        . '<td>' .$id++ . '</td>'
        . '<td>' . $row->title . '</td>'
        . '<td>' . $row->author . '</td>'
        . '</tr>';
}
?>
</table>


<script src="<?php echo base_url('styles/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('styles/js/jquery-1.12.0.min.js')?>"></script>

</body>
</html>

