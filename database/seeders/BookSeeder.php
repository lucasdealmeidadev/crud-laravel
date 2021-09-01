<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Book $book)
    {
        $book->create([
            'title'   => 'Use a Cabeça! Padrões de Projetos',
            'pages'   => '100',
            'price'   => '10.22',
            'id_user' => '1',
        ]);

        $book->create([
            'title'   => 'Domain-Driven Design',
            'pages'   => '40',
            'price'   => '101.00',
            'id_user' => '2',
        ]);

        $book->create([
            'title'   => 'Código Limpo',
            'pages'   => '200',
            'price'   => '201.00',
            'id_user' => '3',
        ]);
    }
}
