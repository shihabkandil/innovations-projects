<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use App\Helpers\Helper;

class NewsApiModel extends Model
{
    use HasFactory;
    
    /**
     * @param $newsSource
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function fetchNews()
    {
        $urlParams = 'everything?q=hospitality%20learning';
        $response = (new Helper)->makeApiCalls($urlParams);
        return Arr::get($response,'articles');
    }
}
