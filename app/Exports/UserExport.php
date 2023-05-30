<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::select('id', 'title', 'category', 'writer', 'publisher', 'isbn', 'synopsis')->get();
    }

    public function headings(): array{
        return["ID", "Title", "Category Name", "Writer", "Publisher", "ISBN Number", "Synopsis"];
    }
}