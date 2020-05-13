<?php
    $errors="";
    $db=mysqli_connect("localhost","root","","todo");
    if(isset($_POST['submit'])){
        $task=$_POST['task'];
        if(empty($task)){
            $errors="*This field Should not be empty";
        }
        else{
       mysqli_query($db,"INSERT INTO tasks1(task) VALUES ('$task')");
        header('location:index1.php');
        }
    }
    $tasks1=mysqli_query($db,"SELECT * FROM tasks1");
    if(isset($_GET['del_task'])){
        $id=$_GET['del_task'];
        mysqli_query($db,"DELETE FROM tasks1 WHERE id=$id");
        header('location:index1.php');
    }
    if(isset($_GET['del_all'])){
        mysqli_query($db,"DELETE FROM tasks1");
        header('location:index1.php');
    }
    /*(isset($_GET['update_task'])){
        $id=$_GET(['update_task']);
        mysqli_query($db,"UPDATE tasks1 SET task=$updatedinfo WHERE id=$id");
    }*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ToDo</title>
</head>

<body>
    <label class="up " for="toggle">
        <i class="fa fa-bars"></i>
    </label>
    <input type="checkbox" id="toggle">
    <div class="nav_bar animated fadeInLeft">
        
            <ul style="color:blue"><a href="index.php">Home</a></ul>
            <ul style="color:red"><a href="index1.php">Studies</a></ul>
            <ul style="color:red"><a href="index2.php">Gym</a></ul>
       
    </div>
   
    <div nav></div>
    
        <div class="container animate__fadeInLeft">
            <div class="top">
               <a href="index1.php?del_all"> <i class="fa fa-refresh" ></i></a>
               <h1>Things to Study</h1>
            </div>
            <div class="content">
                                        <span class="unchecked"id=-1 style="color: white">Added Items</span>
                <?php $i=1;while($line=mysqli_fetch_array($tasks1)){?>
                    <div class="lines">
                           <label style="color: white" for="done"class="omg<?php echo $line['id']?> fa fa-circle-thin" onclick=correct(<?php echo $line['id']?>)></label>
                                        <span class="unchecked"id=<?php echo $line['id']?> style="color: white"><?php echo $line['task'];?></span>
                            <!--<div class="edit fa fa-edit" style="display:contents"onclick=edit()></div>-->
                            <!--<div class="edit fa fa-save" style="display:contents"onclick=edited()><a href="index1.php?update_task="></a></div>-->
                            <div class="dele"><a href="index1.php?del_task=<?php echo $line['id'];?>">Remove</a></div>
                    </div>
                    
                <?php $i++;}?>
            </div>
            <br><br><br><br>
            <div class="bottom">
            <form action="index1.php" method="POST">
                <?php if(isset($errors)){?>
            <input type="input" name="task"  placeholder="<?php echo $errors?>"class="txt"autocomplete="off"  >
            <button type="submit" name="submit" class="sub_btn btn-primary">Add Task</button>
            <?php } ?>
            </form>
            </div>
        </div>
    

</body>

</html>
