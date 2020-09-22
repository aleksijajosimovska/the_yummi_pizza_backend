<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product([
            'title' => 'Prosciutto e Funghi',
            'description' => 'Tomato sauce, mozzarella, ham and oregano',
            'price' => 9,
            'imagePath' => '1.png',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Margherita',
            'description' => 'Tomato sauce, mozzarella and oregano',
            'price' => 7.50,
            'imagePath' => '2.png',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Caprese',
            'description' => 'Mozzarella and sliced tomato',
            'price' => 6.50,
            'imagePath' => '3.png',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Emiliana',
            'description' => 'Tomato sauce, mozzarella, mushrooms, pepperoni and Stracchino (soft cheese)',
            'price' => 11.50,
            'imagePath' => '4.png',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Mediterranea',
            'description' => 'Tomato sauce, buffalo mozzarella, cherry tomatoes and pepper',
            'price' => 12,
            'imagePath' => '2.png',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Mare e Monti',
            'description' => 'Mozzarella, tomato sauce, seafood and porcino mushrooms',
            'price' => 7.50,
            'imagePath' => '1.png',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Pizza al Pesto',
            'description' => 'Tomato, mozzarella, Genoese pesto, pine nuts and olives',
            'price' => 9.50,
            'imagePath' => '4.png',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Capricciosa',
            'description' => 'Tomato sauce, mozzarella, ham, artichokes, mushrooms and olives',
            'price' => 15,
            'imagePath' => '3.png',
        ]);
        $product->save();
    }
}
