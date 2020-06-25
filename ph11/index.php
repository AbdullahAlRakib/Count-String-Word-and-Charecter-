<?php
 require_once './Sen.php';
 use App\classes\Sen;
 $result='';
 if(isset($_POST['btn'])){
     $sentence=new Sen();
     $result=$sentence->findWordCharecter();
 }
?>
<form action="" method="post">
    <table>
        <tr>
            <th>Enter Your String</th>
            <td><input type="text" name="given_string"/></td>
        </tr>
        <tr>
            <th>Total Number of Word</th>
            <td><input type="text" value="<?php echo $result['totalWord'];?> "/> </td>
        </tr>
        <tr>
            <th>Total Number of Charecter </th>
            <td><input type="text" value="<?php echo $result['totalCharecter'];?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit" /></td>
        </tr>
    </table>
</form>
