<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Group</th>
        <th>Department</th>
        <th>City</th>
        <th>Country</th>
        <th>Action</th>
    </tr>
    <?php
    $students = new StudentsModel();
    $results = $students->getAll();
    while($obj = (array) $results->fetch_object()){
    ?>
        <tr>
            <td><?php echo $obj['id'];?></td>
            <td><?php echo $obj['name'];?></td>
            <td><?php echo $obj['surname'];?></td>
            <td><?php echo $obj['gender'];?></td>
            <td><?php echo $obj['age'];?></td>
            <td><?php echo $obj['group'];?></td>
            <td><?php echo $obj['department'];?></td>
            <td><?php echo $obj['city'];?></td>
            <td><?php echo $obj['country'];?></td>
            <td>
                <a href="/?controller=index&action=add&id=<?php echo $obj['id'];?>" class="btn btn-info">Edit</a>
                <a href="/?controller=index&action=delete&id=<?php echo $obj['id'];?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php

    }


?>

</table>
<a href="/?controller=index&action=add" class="btn btn-info">Add</a>

