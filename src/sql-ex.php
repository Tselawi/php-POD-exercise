<?php

//:EX:1
try {
    $results = $db->prepare("SELECT COUNT(contactLastName) FROM customers");
    $results -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
// $ex1 = $ex1->fetchAll(PDO::FETCH_ASSOC);
$results = $results->fetch();
//EX:2
try {
    $customers =$db->prepare("SELECT customerNumber FROM customers where contactFirstName= 'Mary' AND contactLastName='Young'");
    $customers -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$customers = $customers->fetch();
//EX:3
try {
    $address =$db->prepare("SELECT customerNumber from customers where addressLine1 = 'Magazinweg 7'");
    $address -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$address = $address->fetch();
//EX:4
try {
    $lastName =$db->prepare("SELECT lastName, email FROM employees ORDER BY lastName ");
    $lastName -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$lastName = $lastName->fetch();
//EX:5
try {
    $lastName1 =$db->prepare("SELECT lastName, email FROM employees
    ORDER BY lastName DESC");
    $lastName1 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$lastName1 = $lastName1->fetch();
//EX:6
try {
    $code =$db->prepare("SELECT productCode FROM products 
    where productLine ='Trucks and Buses' 
    ORDER BY productScale, productName");
    $code -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$code = $code->fetch();
//EX:7
try {
    $lastName2 =$db->prepare("SELECT lastName, email FROM employees
    where lastName LIKE ('t%')
    ORDER BY lastName ");
    $lastName2 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$lastName2 = $lastName2->fetch();
//EX:8
try {
    $customerNumber =$db->prepare("SELECT customerNumber
    FROM payments where 
    paymentDate ='2004-01-19'");
    $customerNumber -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$customerNumber = $customerNumber->fetch();
//EX:9
try {
    $city =$db->prepare("SELECT COUNT(customerNumber)
    FROM customers WHERE 
    state = 'NV' OR state ='NY'");
    $city -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$city = $city->fetch();
//EX:10
try {
    $city1 =$db->prepare("SELECT COUNT(customerNumber)
    FROM customers WHERE state = 'NV' 
    OR state ='NY' OR country !='USA'");
    $city1 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$city1 = $city1->fetch();

//EX:11
try {
    $country =$db->prepare("SELECT COUNT(country)
    FROM customers WHERE 
    state ='NV' OR state ='NY' 
    OR country != 'USA' AND creditLimit > 1000");
    $country -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$country = $country->fetch();
//EX:12
try {
    $contactFirstName =$db->prepare("SELECT COUNT(contactFirstName)
    FROM customers WHERE salesRepEmployeeNumber IS NULL");
    $contactFirstName -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$contactFirstName = $contactFirstName->fetch();
//EX:13
try {
    $comments =$db->prepare("SELECT COUNT(comments) FROM orders WHERE comments != ''");
    $comments -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$comments = $comments->fetch();
//EX:14
try {
    $comments1 =$db->prepare("SELECT  COUNT(comments) FROM orders
    WHERE comments LIKE ('%caution%')");
    $comments1 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$comments1 = $comments1 ->fetch();
//EX:15
try {
    $creditLimit =$db->prepare("SELECT ROUND(AVG(creditLimit)) FROM customers
    WHERE country = 'USA'");
    $creditLimit -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$creditLimit = $creditLimit ->fetch();
//EX:16
try {
    $contact1 =$db->prepare("SELECT 
    MAX(contactLastName) as total from customers
    ORDER BY total DESC");
    $contact1 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$contact1 = $contact1 ->fetch();
//EX:17
try {
    $status =$db->prepare("SELECT status, COUNT(status) 
    FROM orders GROUP BY status
    ORDER BY COUNT(status) DESC");
    $status -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$status = $status ->fetchAll(PDO::FETCH_ASSOC);
//EX:18
try {
    $status1 =$db->prepare("SELECT country,customerNumber 
    FROM customers where 
    country in 
    ('Austria', 'Canada', 'China',
    'Germany', 'Greece', 'Japan',
    'Philippines', 'South Korea')
    GROUP BY country ");
    $status1 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$status1 = $status1 ->fetchAll(PDO::FETCH_ASSOC);
//EX:19
try {
    $order =$db->prepare("SELECT count(orderNumber), shippedDate ,status
    FROM orders WHERE shippedDate IS NULL");
    $order -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$order = $order ->fetch();
//EX:20
try {
    $order1 =$db->prepare("SELECT COUNT(customerNumber)  from customers 
    JOIN employees ON 
    customers.salesRepEmployeeNumber= employees.employeeNumber
    where firstName IN ('steve')
    And lastName IN ('Patterson')
    AND customers.creditLimit > 100000");
    $order1 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$order1 = $order1 ->fetch();
//EX:21
try {
    $status2 =$db->prepare("SELECT COUNT(customerNumber), status FROM orders
    WHERE status = 'shipped'");
    $status2 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$status2 = $status2 ->fetch();
//EX:22
try {
    $total =$db->prepare("SELECT ROUND(AVG(innertable.total)) FROM 
    (SELECT COUNT(*) as total from products
    GROUP BY productLine) as innertable");
    $total -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$total = $total ->fetch();
//EX:23
try {
    $products =$db->prepare("SELECT count(productName) , quantityInStock
    from products
    Where quantityInStock < 100 ");
    $products -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$products = $products ->fetch();
//EX:24
try {
    $products1 =$db->prepare("SELECT count(productName) , quantityInStock 
    from products WHERE quantityInStock
    BETWEEN  100 AND 500 ");
    $products1 -> execute();
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
$products1 = $products1 ->fetch();
//EX:25
try{
    $statusNum=$db->prepare("SELECT count(status), shippedDate FROM orders
    WHERE status ='Shipped' AND shippedDate
    BETWEEN '2004-06-01' AND '2004-09-30'");
    $statusNum->execute();
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
$statusNum= $statusNum->fetch();
//EX:26

//EX:27

//EX:28

//EX:29

//EX:30

//EX:31

//EX:32

//EX:33

//EX:34

//EX:35
//$products = $results->fetchAll(PDO::FETCH_ASSOC);
// $customers = $results->fetchAll(PDO::FETCH_ASSOC);
