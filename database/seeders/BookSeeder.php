<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $books = [
            [
                "name" => "Harry Potter",
                "author" => " J. K. Rowling",
                "description" => "Harry Potter è una serie di romanzi fantasy scritta da J. K. Rowling, incentrata sulle avventure del giovane mago Harry Potter e dei suoi migliori amici Ron Weasley ed Hermione Granger, studenti della Scuola di Magia e Stregoneria di Hogwarts.",
                "price" => "20,50",
            ],
            [
                "name" => "Harry Potter",
                "author" => " J. K. Rowling",
                "description" => "Harry Potter è una serie di romanzi fantasy scritta da J. K. Rowling, incentrata sulle avventure del giovane mago Harry Potter e dei suoi migliori amici Ron Weasley ed Hermione Granger, studenti della Scuola di Magia e Stregoneria di Hogwarts.",
                "price" => "20,50",
            ],
            [
                "name" => "Harry Potter",
                "author" => " J. K. Rowling",
                "description" => "Harry Potter è una serie di romanzi fantasy scritta da J. K. Rowling, incentrata sulle avventure del giovane mago Harry Potter e dei suoi migliori amici Ron Weasley ed Hermione Granger, studenti della Scuola di Magia e Stregoneria di Hogwarts.",
                "price" => "20,50",
            ]
        ];

        foreach ($books as $book){
            $newBook = new Book();
            $newBook->name = $book["name"];
            $newBook->author = $book["author"];
            $newBook->description = $book["description"];
            $newBook->price = $book["price"];
            $newBook->save();
        }
    }
}
