<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model
{
    use HasFactory;

    /**
     * @param $newsSource
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function fetchNews()
    {
        $urlParams = 'everything?q=hospitality%20learning?';
        $response = (new Helper)->makeApiCalls($urlParams);
        return Arr::get($response,'articles');
    }
}
