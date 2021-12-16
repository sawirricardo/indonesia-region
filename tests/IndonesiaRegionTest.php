<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Artisan;
use Sawirricardo\IndonesiaRegion\IndonesiaRegion;

beforeAll(function () {
    Artisan::call('indonesia-region:seed');
});

it('returns a collection of province', function () {
    /** @var Collection */
    $provinces = IndonesiaRegion::query()->provinces()->get();
    expect($provinces->every(function ($province) {
        return $province->isRoot();
    }))->toBeTrue();
});

it('returns a collection of cities', function () {
    /** @var Collection */
    $cities = IndonesiaRegion::query()->provinces()->first()->cities()->take(3)->get();
    expect($cities->every(function ($city) {
        return strlen($city->code) === 5;
    }))->toBeTrue();
});

it('returns a collection of districts', function () {
    /** @var Collection */
    $districts = IndonesiaRegion::query()->provinces()->first()->cities()->first()->districts()->take(3)->get();
    expect($districts->every(function ($district) {
        return strlen($district->code) === 8;
    }))->toBeTrue();
});

it('returns a collection of villages', function () {
    /** @var Collection */
    $villages = IndonesiaRegion::query()->provinces()->first()->cities()->first()->districts()->first()->villages()->take(3)->get();
    expect($villages->every(function ($village) {
        return strlen($village->code) === 13;
    }))->toBeTrue();
});
