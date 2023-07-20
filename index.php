<?php
// Included the necessary files that contain the class definitions
require_once 'ProductSortingInterface.php';
require_once 'PriceSorter.php';
require_once 'SalesPerViewSorter.php';
require_once 'Catalog.php';

$products = [
  //products data
  [
    'id' => 1,
    'name' => 'Alabaster Table',
    'price' => 12.99,
    'created' => '2019-01-04',
    'sales_count' => 32,
    'views_count' => 730,
    ],
    [
    'id' => 2,
    'name' => 'Zebra Table',
    'price' => 44.49,
    'created' => '2012-01-04',
    'sales_count' => 301,
    'views_count' => 3279,
    ],
    [
    'id' => 3,
    'name' => 'Coffee Table',
    'price' => 10.00,
    'created' => '2014-05-28',
    'sales_count' => 1048,
    'views_count' => 20123,
    ]
];

$productPriceSorter = new PriceSorter();
$productSalesPerViewSorter = new SalesPerViewSorter();

$catalog = new Catalog($products);

$productsSortedByPrice = $catalog->getProducts($productPriceSorter);
$productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

// Displaying the sorted products by price
echo "Products sorted by price:\n<br />";
foreach ($productsSortedByPrice as $product) {
    echo "{$product['name']} - Price: {$product['price']}\n<br />";
}

// Displaying the sorted products by sales per view
echo "<br />\nProducts sorted by sales per view:\n<br />";
foreach ($productsSortedBySalesPerView as $product) {
    echo "{$product['name']} - Sales: {$product['sales_count']}, Views: {$product['views_count']}\n<br />";
}

?>