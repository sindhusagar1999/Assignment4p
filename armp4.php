<html>
<head><title>Assignment4</title></head>
<body>
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Submit</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $total=0;  
        $a=$num;  
        while($a!=0)  
        {  
        $rem=$a%10;  
        $total=$total+$rem*$rem*$rem;  
        $a=$a/10;  
        }  
        echo "The given number is $num"; 
        echo "</br>";
        echo "The sum of the digits is $total"; 
        echo "</br>";
        if($num==$total)  
        {  
        echo "It is an Armstrong number";  
        }  
        else  
        {  
        echo "It is not an armstrong number";  
        }  
    }     
?> 
</center>
</body>
</html>


