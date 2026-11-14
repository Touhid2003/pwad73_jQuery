<?php
    $db = new mysqli("localhost", "root", "", "jquery_dropdown");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown </title>
    <script src="../js/jquery.min.js"></script>

</head>
<body>
    <h1>Registration Form</h1>
    <form action="">

<label for="">District</label> <br>
        <select name="" id="district">
            
            <option value="" disabled selected option>select one</option>
            <?php
                $raw = $db->query("SELECT * FROM districts");

                while($row = $raw->fetch_assoc()){

                
            ?>
            <option value="<?php
                echo $row['id'];
                
            ?>">
                <?php
                echo $row['district'];
                
            ?>
            </option>

            <?php 
            };
            ?>
        </select> <br> <br>
         <label for="">Upazila</label> <br> 
        <select name="" id="upazila">
            <option value="" disabled selected>select upazila</option>
        </select> <br> <br>

        <input type="submit" value="SUBMIT">

    </form>

    <script>
      $(document).ready(function() {
    $("#district").on('change', function () {
        // alert($(this).val());
        $.get("upazilla.php",{
        distrid : $(this).val()
}, function(date, status){
    $("#upazila").html(data);

})

        
    });
});

    </script>
    
</body>
</html>