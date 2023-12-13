<?php

namespace Kirby\Products;

use Kirby\Data\Data;
use Kirby\Exception\InvalidArgumentException;
use Kirby\Exception\NotFoundException;
use Kirby\Toolkit\V;

class Product
{

    /**
     * Creates a new product with the given $input
     * data and adds it to the json file
     *
     * @return bool
     */
    public static function create(array $input): bool
    {
        // reuse the update method to create a new
        // product with the new unique id. If you need different logic
        // here, you can easily extend it
        return static::update(uuid(), $input);
    }

    /**
     * Deletes a product by product id
     *
     * @return bool
     */
    public static function delete(string $id): bool
    {
        // get all products
        $products = static::list();

        // remove the product from the list
        unset($products[$id]);

        // write the update list to the file
        return Data::write(static::file(), $products);
    }

    /**
     * Returns the absolute path to the products.json
     * This is the place to modify if you don't want to
     * store the products in your plugin folder
     * – which you probably really don't want to do.
     *
     * @return string
     */
    public static function file(): string
    {
        return __DIR__ . '/../products.json';
    }

    /**
     * Finds a product by id and throws an exception
     * if the product cannot be found
     *
     * @param string $id
     * @return array
     */
    public static function find(string $id): array
    {
        $product = static::list()[$id] ?? null;

        if (empty($product) === true) {
            throw new NotFoundException('The product could not be found');
        }

        return $product;
    }

    /**
     * Lists all products from the products.json
     *
     * @return array
     */
    public static function list(): array
    {
        return Data::read(static::file());
    }

    /**
     * Lists all available product types
     *
     * @return array
     */
    public static function types(): array
    {
        return [
            'bakery',
            'dairy',
            'fruit',
            'meat',
            'vegan',
            'vegetable',
        ];
    }

    /**
     * Updates a product by id with the given input
     * It throws an exception in case of validation issues
     *
     * @param string $id
     * @param array $input
     * @return boolean
     */
    public static function update(string $id, array $input): bool
    {
        $product = [
            'id'          => $id,
            'title'       => $input['title'] ?? null,
            'type'        => $input['type'] ?? null,
            'description' => $input['description'] ?? null,
            'price'       => floatval($input['price'] ?? null)
        ];

        // require a title
        if (V::minlength($product['title'], 1) === false) {
            throw new InvalidArgumentException('The title must not be empty');
        }

        // make sure the title is not longer than expected
        if (V::maxlength($product['title'], 100) === false) {
            throw new InvalidArgumentException('The title must not be longer than 100 characters');
        }

        // validate the product category
        if (V::in($product['type'], static::types()) === false) {
            throw new InvalidArgumentException('Please select a valid product category');
        }

        // validate the price
        if (V::min($product['price'], 0.01) === false) {
            throw new InvalidArgumentException('The product must not be free');
        }

        // load all products
        $products = static::list();

        // set/overwrite the product data
        $products[$id] = $product;

        return Data::write(static::file(), $products);
    }

}
