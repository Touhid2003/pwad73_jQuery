<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <form action="">
        <input type="text" class="fullname" placeholder="Enter your fullName"> <br><br>
        <textarea class="address" id="" placeholder="address">

        </textarea> <br> <br>
        <button type="button" class="btn"> submit</button>
    </form>

    <!-- <button class="btn1">Get Data from server</button> -->

    <script>
        $(function(){
            $(".btn").click(function(){
                let fullName = $(".fullname"). val();
                let address = $(".address"). val();
                $.get("insert.php", {Name: fullName, Address: address}, function(data){
                    alert(data);
                });
            });

        });
    </script>
    <script src="https://jsdelivr.net" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>