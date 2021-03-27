<?php 
require_once('database.php');

require('sql-ex.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Classic Models</title>
</head>
<body>
    <h1>Classic Models</h1>
    <ol>
        <?php

        echo "Exercise 1 starts here: <br><br>" ;
        function new_exercise($x) {
            $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/><br/>";
            echo $block;
        }
        //ex:1
       
        echo $results['COUNT(contactLastName)'];
        new_exercise(2);
        //ex:2
        // print_r($customers);
        echo $customers['customerNumber'];
        //ex:3
        new_exercise(3);
        echo $address['customerNumber'];
        //ex4
        new_exercise(4);
        echo $lastName['email'];

        new_exercise(5);
        echo $lastName1['email'];

        new_exercise(6);
        echo $code['productCode'];

        new_exercise(7);
        echo $lastName2['email'];    

        new_exercise(8);
        echo $customerNumber['customerNumber'];

        new_exercise(9);
        echo $city['COUNT(customerNumber)'];

        new_exercise(10);
        echo $city1['COUNT(customerNumber)'];

        new_exercise(11);
        echo $country['COUNT(country)'];

        new_exercise(12);
        echo $contactFirstName['COUNT(contactFirstName)'];

        new_exercise(13);
        echo $comments['COUNT(comments)'];

        new_exercise(14);
        echo $comments1['COUNT(comments)'];

        new_exercise(15);
        echo $creditLimit['ROUND(AVG(creditLimit))'];

        new_exercise(16);
        echo $contact1['total'];

        new_exercise(17);
        foreach($status as $ket => $statu){
        echo '<p>'. $statu['status'] . '</p>';
        }
        new_exercise(18);
        foreach($status1 as $key => $status){
        echo '<p>'. $status['country'] . '</p>';
        }
        new_exercise(19);
        echo $order['count(orderNumber)'];

        new_exercise(20);
        echo $order1['COUNT(customerNumber)'];

        new_exercise(21);
        echo $status2['COUNT(customerNumber)'];

        new_exercise(22);
        echo $total['ROUND(AVG(innertable.total))'];

        new_exercise(23);
        echo $products['count(productName)'];

        new_exercise(24);
        echo $products1['count(productName)'];

        new_exercise(25);
        echo $statusNum['count(status)'];

        new_exercise(26);

        new_exercise(27);

        new_exercise(28);

        new_exercise(29);

        new_exercise(30);

        new_exercise(31);

        new_exercise(32);

        new_exercise(33);


            // foreach($customers as $key => $customer){
            //     echo '<p>'. $customer['contactFirstName'] . ' '. $customer['contactLastName'] .'</p>'; 
            // }
            // foreach ($employees as $key => $employee){
            //     //var_dump($employees);
            //     echo '<li>' . $employee['lastName'].' '. $employee['email'] .'</li>'; 
            // }
            // foreach($products as $key => $product){
            //     echo '<li>'. $product['productCode'] .' '. $product['productScale'] .' '. $product['ProductName'] . '</li>';
            // }

        ?>
    </ol>

</body>
</html>