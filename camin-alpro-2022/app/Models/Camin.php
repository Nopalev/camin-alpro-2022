<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camin extends Model
{
    use HasFactory;

    private static $dataCamin = [
        [
            "id" => 1,
            "nama" => "Naufal Faadhilah",
            "nrp" => "5025201221",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "image" => "https://res.cloudinary.com/marsel/image/upload/v1644346047/dbtc/5025201221.jpg",
        ],
        [
            "id" => 2,
            "nama" => "Andhika Ditya Bagaskara D",
            "nrp" => "5025201096",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "image" => "https://res.cloudinary.com/marsel/image/upload/v1644346047/dbtc/5025201096.jpg",
        ],
        [
            "id" => 3,
            "nama" => "Mohammad Fany Faizul Akbar",
            "nrp" => "5025201225",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "image" => "https://res.cloudinary.com/marsel/image/upload/v1644346047/dbtc/5025201225.jpg",
        ],
        [
            "id" => 4,
            "nama" => "Luthfiyyah Hanifah Amari",
            "nrp" => "5025201090",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "image" => "https://res.cloudinary.com/marsel/image/upload/v1644346047/dbtc/5025201090.jpg",
        ],
    ];

    public static function getAllDataCamin()
    {
        return self::$dataCamin;
    }
    public static function getDataCamin($index)
    {
        return self::$dataCamin[$index];
    }
    
}

