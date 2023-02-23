<?php include "_partials/header.php" ?>

test

<div class="page-header">
    <h1>MY 1ST TO DO APP!</h1>
</div>

<?php $data = $database->select('items', 'text');?>

<ul class="list-group col-sm-6">

<?php 

foreach ( $data as $item) {
    echo '<li class="list-group-item">'. $item .'</li>';
    }
?>

</ul>

<form id="add-form" action="_inc/add-new.php" class="col-sm-6" method="post" placeholder="ss">
    <p class="form-group"><textarea name="message" id="text" rows="3" class="form-control" placeholder="write your to do thing"></textarea></p>
    <p class="form-group">
        <input type="submit" value="add new thing" class="btn-sm btn-danger">
    </p>
</form>


<?php include "_partials/footer.php" ?>   
