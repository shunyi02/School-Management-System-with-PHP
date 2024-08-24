<?php 
// Include the database configuration file  
require_once 'Connection.php'; 
 
// Get image data from database 
$result = $con->query("SELECT image FROM student"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <table style="width:50px;height50px">
<tbody>
        <?php while($row = $result->fetch_assoc()){ ?> 
            <tr><img style="width:600px; height: 800px; border: 1px solid black; border-radius: 25px; display: block; margin-left: auto; margin-right: auto; margin-top: 5em; margin-bottom: 5em; padding: 5em;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> </tr>
        <?php } ?> 
</tbody>
</table>
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>