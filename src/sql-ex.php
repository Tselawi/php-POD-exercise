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
try{
$contact2=$db->prepare("SELECT COUNT(contactLastName), COUNT(lastName) 
FROM customers JOIN employees 
ON customers.contactLastName = employees.lastName;");
$contact2->execute();
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
$contact2=$contact2->fetch();

//EX:27
try{
$buyPrice=$db->prepare("SELECT productCode, buyPrice FROM 
products ORDER BY buyPrice DESC");
$buyPrice->execute();
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
$buyPrice=$buyPrice->fetch();
//EX:28
try{
    $profit=$db->prepare("SELECT productCode, round(MSRP - buyPrice)
    AS difference FROM products 
    ORDER BY difference DESC ");
    $profit->execute();
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
$profit= $profit->fetch();
//EX:29
try{
    $profit1=$db->prepare("SELECT productCode,
    round(MSRP -buyPrice) AS difference 
    FROM products
    ORDER BY difference DESC");
    $profit1->execute();
}catch(Exception $e){
echo $e->getMessage();
exit;
}
$profit1=$profit1->fetch();
//EX:30
try{
    $productCode=$db->prepare("SELECT c.productCode from products as c 
    LEFT JOIN orderdetails as o ON c.productCode = o.productCode 
    WHERE o.productCode IS NULL");
    $productCode->execute();
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
$productCode=$productCode->fetch();
//EX:31
try{
$prise=$db->prepare("SELECT Count(productCode) 
FROM products WHERE MSRP -buyPrice < 30");
$prise->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$prise=$prise->fetch();
//EX:32
try{
    $productCode1=$db->prepare("SELECT productCode 
    FROM orderdetails 
    GROUP BY productCode 
    ORDER BY COUNT(productCode) DESC ");
    $productCode1->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$productCode1=$productCode1->fetch();
//EX:33
try{
$quantityOrd=$db->prepare("SELECT 
productCode, sum(quantityOrdered) as total
from orderdetails
left join orders o 
on o.orderNumber = orderdetails.orderNumber 
where o.status = 'shipped'
group by productCode 
order by total desc");
$quantityOrd->execute();
}catch(Exception $e){
$e->getMessage();
exit;
}
$quantityOrd=$quantityOrd->fetch();
//EX:34
try{
$checkNum=$db->prepare("SELECT * FROM orders 
JOIN payments ON 
payments.customerNumber = orders.customerNumber 
Where orderNumber =10210
 AND paymentDate BETWEEN orderDate AND shippedDate;
");
$checkNum->execute();
}catch(Exception $e){
$e->getMessage();
exit;
}
$checkNum=$checkNum->fetch();
//EX:35
try{
$checkNum1=$db->prepare("SELECT * FROM payments 
JOIN orders ON orderNumber 
Where checkNumber ='CP804873' 
and paymentDate BETWEEN orderDate and shippedDate");
$checkNum1->execute();
}catch(Exception $e){
$e->getMessage();
exit;
}
$checkNum1=$checkNum1->fetch();
//EX:36
try{
$pay=$db->prepare("SELECT count(*) FROM payments
where amount > 5000 AND
checkNumber LIKE ('%D%9')");
$pay->execute();
}catch(Exception $e){
$e->getMessage();
exit;
}
$pay=$pay->fetch();
//EX:37
try{
$productQty=$db->prepare("SELECT count(*) FROM products 
WHERE productScale IN ('1:18', '1:24')
AND ((productLine = 'Classic Cars' and 
msrp between 50 and 80)
OR (productLine = 'Trucks and Buses' 
and msrp < 100)
OR (productLine = 'trains' and msrp > 100))");
$productQty->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$productQty=$productQty->fetch();

//EX:38
try{
$total1=$db->prepare("SELECT country, count(country) 
as total from customers 
where country not in 
(select country from offices o2)
group by country 
order by total desc");
$total1->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$total1=$total1->fetch();
//EX:39
try{
$total2=$db->prepare("SELECT count(*) as total, o2.city, o2.country 
from employees e 
left join offices o2 on e.officeCode = o2.officeCode 
group by e.officeCode 
order by total desc  ");
$total2->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$total2=$total2->fetch();
//EX:40
try{
$total3=$db->prepare("SELECT count(*) as total, o2.city, o2.country 
from employees e 
left join offices o2 on e.officeCode = o2.officeCode 
group by e.officeCode 
order by total desc");
$total3->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$total3=$total3->fetch();

//EX:41
try{
$avg=$db->prepare("SELECT round(avg(innerTable.total)) from (
    select count(*) as total
        from employees e 
        left join offices o2 on e.officeCode = o2.officeCode 
        group by o2.country 
        order by total desc) 
        as innerTable");
        $avg->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$avg=$avg->fetch();
//EX:42
try{
$sum=$db->prepare("SELECT round(sum(quantityOrdered * priceEach)) from orderdetails od
left join orders o on od.orderNumber = o.orderNumber 
where o.status = 'shipped'");
$sum->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$sum=$sum->fetch();
//EX:43
try{
$sum1=$db->prepare("SELECT round(sum(quantityOrdered * priceEach)) from orderdetails od
left join orders o on od.orderNumber = o.orderNumber 
where o.status in ('shipped', 'Resolved')
and year(shippedDate) = 2005");
$sum1->execute();
}catch(Exception $e){
$e->getMessage();
exit;
}
$sum1=$sum1->fetch();
//EX:44
try{
$totalYear=$db->prepare("SELECT year(shippedDate)
 as year, round(sum(quantityOrdered * priceEach)) 
 as total from orderdetails od
left join orders o on od.orderNumber = o.orderNumber 
where o.status in ('shipped', 'Resolved')
group by year
order by total desc");
$totalYear->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$totalYear=$totalYear->fetch();
//EX:45
try{
    $totalYear1=$db->prepare("SELECT year(shippedDate) 
    as year, round(sum(quantityOrdered * priceEach))
     as total from orderdetails od
    left join orders o on od.orderNumber = o.orderNumber 
    where o.status in ('shipped', 'Resolved')
    group by year
    order by total desc");
    $totalYear1->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$totalYear1=$totalYear1->fetch();
//EX:46
/*try{
$orderName=$db->prepare("SELECT c.customerName, round(sum(quantityOrdered * priceEach)) as total from customers c
left join orders o on c.customerNumber  = o.customerNumber 
left join orderdetails od on o.orderNumber = od.orderNumber 
where country = 'USA'
group by c.customerNumber 
order by total desc");
$orderName->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$orderName=$orderName->fetct();*/
//EX:47

//EX:48
/*try{
    $customerOrder=$db->prepare("SELECT count(*) from (
        select c.customerName, count(o.orderNumber) as total from customers c
            left join orders o on c.customerNumber  = o.customerNumber 
            group by c.customerNumber 
                having total = 0
            order by total asc
            ) as innerTable");
            $customerOrder->execute();
}catch(Exception $e){
    $e->getMessage();
    exit;
}
$customerOrder=$customerOrder->fetch();*/
//EX:49

//EX:50
//$products = $results->fetchAll(PDO::FETCH_ASSOC);
// $customers = $results->fetchAll(PDO::FETCH_ASSOC);
