<?php
class Catalog {
    private $products;
    public function __construct(array $products) {
        $this->products = $products;
    }

    public function getProducts(ProductSortingInterface $sorter): array {
        return $sorter->sort($this->products);
    }
}
