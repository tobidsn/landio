<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample penulis
		$author1 = Author::create(['name'=>'Mohammad Fauzil Adhim']);
		$author2 = Author::create(['name'=>'Salim A. Fillah']);
		$author3 = Author::create(['name'=>'Aam Amiruddin']);
		$author4 = Author::create(['name'=>'Mandan']);
		// Sample buku
		$book1 = Book::create(['title'=>'Kupinang Engkau dengan Hamdalah', 'amount'=>3, 'author_id'=>$author1->id]);
		$book2 = Book::create(['title'=>'Jalan Cinta Para Pejuang','amount'=>2, 'author_id'=>$author2->id]);
		$book3 = Book::create(['title'=>'Membingkai Surga dalam Rumah Tangga','amount'=>4, 'author_id'=>$author3->id]);
		$book4 = Book::create(['title'=>'Cinta & Seks Rumah Tangga Muslim','amount'=>3, 'author_id'=>$author3->id]);
		$book4 = Book::create(['title'=>'Mandan','amount'=>3, 'author_id'=>$author4->id]);

    }
}
