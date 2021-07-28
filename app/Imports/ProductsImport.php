<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'asin' => $row['asin'],
            'title' => $row['title'],
            'price' => (double)$row['price'],
            'net_margin' => $row['net_margin']
        ]);
    }

    public function rules(): array
    {
        return [
            'asin' => 'required|alpha_num',
            'title' => 'required',
            'price' => 'required|numeric',
            'net_margin' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function customValidationMessages()
    {
        return [
            'asin.required' => ':attribute is required.',
            'asin.alpha_num' => ':attribute can not contain special chars.',
            'title.required' => ':attribute is required.',
            'price.required' => ':attribute is required.',
            'price.numeric' => ':attribute can not have letters.',
            'net_margin.required' => 'Net Margin is required.',
        ];
    }
}
