<?php
namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'The quick brown fox jumps over the laxy dog',
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'The quick brown fox jumps over the laxy dog',
            ],

        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

