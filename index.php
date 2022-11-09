<?php 
$title = "Homepage" ;
 require_once 'includes/header.php';
 require_once 'db/conn.php'; 
 

 $results = $crud->getSpecialties();

 ?>

<h1 class="text-center">Registration for I.T Conference</h1>

<form method="post" enctype="multipart/form-data" action="success.php">

    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input required type="text" class="form-control" id="dob" name="datepicker">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input required type="email" class="form-control" for="email" id="email" name="email"
            aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label name="specialty" for="specialty"> Area of Expertise </label>
        <select class="form-control" id="specialty" name="specialty">
            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['specialty_id']?>"><?php echo $r['name']; ?> </option>

            <?php }?>

        </select>
    </div>

    <div class="mb-3">
        <label name="contactnum" for="contactnum" class="form-label">Contact Number</label>
        <input type="text" name="contactnum" class="form-control" id="contactnum">
        <div id="" class="form-text"></div>
    </div>
            

    <div class="mb-3">
        <label class="custom-file" id="avatar" name="avatar" class="form-label">Choose Profile Picture</label>
        <input type="file"  accept = "image/*" class="form-control" name="avatar" >
        <div id="phoneHelp" class="form-text">This is optional</div>
    </div>

    <div class="d-grid gap-2 col-4 mx-auto">
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
        <button type="back" href="viewrecords.php" name="back" class="btn btn-primary btn-lg">Back to View</button>
    </div>
    <div>

        <?php require_once 'includes/footer.php';?>
</form>
<br/><br/><br/><br/>
<br/><br/>
