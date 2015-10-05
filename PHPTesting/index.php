<?php

require_once 'bootstrap.php';


$queryBuilder = $entityManager->createQueryBuilder();

$type = $queryBuilder->gettype();

$query = $queryBuilder
                ->select('*')
                ->from('User', 'u')
                ->orderBy('u.firstName', 'ASC')->getQuery();



$users = $query->execute();

echo "Hello World!";




?>