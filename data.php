<?php

include ('constants.php');
$q=mysqli_query($con,"SELECT * FROM ad_6b7a5f33fb3780b.campaign");
while($e=mysqli_fetch_assoc($q))
{
        $output[]=$e;
}

print(json_encode($output));
mysqli_close($con);
?>