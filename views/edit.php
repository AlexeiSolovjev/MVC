    <form action="/?controller=index&action=add" method="post" class="form-horizontal col-lg-offset-4 col-lg-4" role="form" >
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" id="name" name="name" value="<?php if(isset($student['name'])) echo $student['name'];?>" required="required" placeholder="Enter name">
            </div>
        </div>
        <div class="form-group">
            <label for="surname" class="col-lg-2 control-label">Surname</label>
            <div class="col-lg-10">
                <input type="text" id="surname" name="surname" value="<?php if(isset($student['surname'])) echo $student['surname'];?>" required="required" placeholder="Enter surname">
            </div>
        </div>
        <div class="form-group">
            <label for="gender" class="col-lg-2 control-label">Gender</label>
            <div class="col-lg-10">
                <input type="text" id="gender" name="gender" value="<?php if(isset($student['gender'])) echo $student['gender'];?>" required="required" placeholder="Enter gender">
            </div>
        </div>

        <div class="form-group">
            <label for="age" class="col-lg-2 control-label">Age</label>
            <div class="col-lg-10">
                <input type="text" id="age" name="age" value="<?php if(isset($student['age'])) echo $student['age'];?>" required="required" placeholder="Enter age">
            </div>
        </div>

        <div class="form-group">
            <label for="group" class="col-lg-2 control-label">Group</label>
            <div class="col-lg-10">
                <input type="text" id="group" name="group" value="<?php if(isset($student['group'])) echo $student['group'];?>" required="required" placeholder="Enter group">
            </div>
        </div>

        <div class="form-group">
            <label for="department" class="col-lg-2 control-label">Department</label>
            <div class="col-lg-10">
                <input type="text" id="department" name="department" value="<?php if(isset($student['department'])) echo $student['department'];?>" required="required" placeholder="Enter department" >
            </div>
        </div>

        <div class="form-group">
            <label for="city" class="col-lg-2 control-label">City</label>
            <div class="col-lg-10">
                <input type="text" id="city" name="city" value="<?php if(isset($student['city'])) echo $student['city'];?>" required="required" placeholder="Enter city">
            </div>
        </div>

        <div class="form-group">
            <label for="country" class="col-lg-2 control-label">Country</label>
            <div class="col-lg-10">
                <input type="text" id="country" name="country" value="<?php if(isset($student['country'])) echo $student['country'];?>" required="required" placeholder="Enter country">
            </div>
        </div>


        <?php if(isset($student['id'])):?>
            <input type="hidden" name="id" value="<?php if(isset($student['id'])) echo $student['id'];?>">
        <?php endif;?>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <input type="submit" value="OK" class="btn btn-success">
                <a href="/?controller=index&action=index">Cancel</a>
            </div>
        </div>

    </form>
