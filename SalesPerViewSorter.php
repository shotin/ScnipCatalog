<?php
class SalesPerViewSorter implements ProductSortingInterface {
    public function sort(array $products): array {
        // Implement sorting logic by sales per view
        // Calculate the ratio of sales to views for each product and then sort accordingly
        usort($products, function($a, $b) {
            $ratioA = $a['sales_count'] / $a['views_count'];
            $ratioB = $b['sales_count'] / $b['views_count'];
            return $ratioA <=> $ratioB;
        });
        return $products;
    }
}
