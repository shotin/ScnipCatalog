<?php
  class PriceSorter implements ProductSortingInterface {
      public function sort(array $products): array {
          // Implement sorting logic by price
          usort($products, function($a, $b) {
              return $a['price'] <=> $b['price'];
          });
          return $products;
      }
  }
  
  