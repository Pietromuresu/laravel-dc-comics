<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *  @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                "title" => 'required|max:100|min:5' ,
                "description" => 'required|min:5',
                "thumb" => 'required',
                "price" => 'required|max:10',
                "series" => 'required|max:50',
                "sale_date" => 'required',
                "type" => 'max:50',
                "artists" => 'required|max:255',
                "writers" => 'required|max:255'

        ];
    }

    public function messages(){
        return  [
                    "title.required" => "Title is required",
                    "title.max" => "The max amount of charachters for title is :max",
                    "title.min" => "The minimum amount of charachters for title is :min",
                    "description.required" => "Description is required",
                    "description.min" => "The minimum amount of charachters for description is :min",
                    "thumb.required" => "thumb is required",
                    "price.required" => "price is required",
                    "price.max" => "The max amount of charachters for price is :max",
                    "series.required" => "Series is required",
                    "series.max" => "The max amount of charachters for series is :max",
                    "sale_date.required" => "Launch Date is required",
                    "type.max" => "The max amount of charachters for type is :max",
                    "artists.required" => "Artists is required",
                    "artists.max" => "The max amount of charachters for artists is :max",
                    "writers.required" => "Writers is required",
                    "writers.max" => "The max amount of charachters for writers is :max"
        ];
    }
}
