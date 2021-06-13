<html>
<head><title>Program1 SQRT</title></head>
<body>
<h2><p>Number generated randomly is  <?php
    $choice = rand(1, 100);
    echo $choice;
?>.</p><p> And its square root is <?php
    echo round(sqrt($choice),6);
?>.</p></h2>
</body>
</html>