<?php

namespace Sawirricardo\IndonesiaRegion\Models;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class IndonesiaRegion extends Model
{
    use HasRecursiveRelationships;

    public $timestamps = false;

    public function scopeProvinces($query)
    {
        return $query->isRoot();
    }

    public function scopeCitiesOf($query, $provinceId)
    {
        return $query->where('parent_id', $provinceId)->whereRaw('LENGTH(code)=5');
    }

    public function cities()
    {
        return $this->citiesOf($this->id);
    }

    public function scopeDistrictsOf($query, $cityId)
    {
        return $query->where('parent_id', $cityId)->whereRaw('LENGTH(code)=8');
    }

    public function districts()
    {
        return $this->districtsOf($this->id);
    }

    public function scopeVillagesOf($query, $districtId)
    {
        return $query->where('parent_id', $districtId)->whereRaw('LENGTH(code)=13');
    }

    public function villages()
    {
        return $this->villagesOf($this->id);
    }
}
