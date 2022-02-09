<?php

use Illuminate\Database\Eloquent\Collection;
use function Pest\Laravel\artisan;

use Sawirricardo\IndonesiaRegion\Models\IndonesiaRegion;

it('returns a collection of province', function () {
    artisan('indonesia-region:seed')->assertSuccessful();
    /** @var Collection */
    $provinces = IndonesiaRegion::query()->provinces()->get();
    expect($provinces->every(function ($province) {
        return $province->isRoot();
    }))->toBeTrue();

    $cities = IndonesiaRegion::query()->provinces()->first()->cities()->take(3)->get();
    expect($cities->every(function ($city) {
        return strlen($city->code) === 5;
    }))->toBeTrue();

    $districts = IndonesiaRegion::query()->provinces()->first()->cities()->first()->districts()->take(3)->get();
    expect($districts->every(function ($district) {
        return strlen($district->code) === 8;
    }))->toBeTrue();

    $villages = IndonesiaRegion::query()->provinces()->first()->cities()->first()->districts()->first()->villages()->take(3)->get();
    expect($villages->every(function ($village) {
        return strlen($village->code) === 13;
    }))->toBeTrue();
});
