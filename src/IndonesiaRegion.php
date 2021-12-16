<?php

namespace Sawirricardo\IndonesiaRegion;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class IndonesiaRegion extends Model
{
  use NodeTrait;

  public function scopeProvinces($query)
  {
    return $query->whereIsRoot();
  }

  public function scopeCitiesOf($query, $provinceId)
  {
    return $query->where('parent_id', $provinceId)->whereRaw('LENGTH(code)=5');
  }

  public function cities()
  {
    return $this->citiesOf($this->id);
  }

  public  function scopeDistrictsOf($query, $cityId)
  {
    return $query->where('parent_id', $cityId)->whereRaw('LENGTH(code)=8');
  }

  public function districts()
  {
    return $this->districtsOf($this->id);
  }

  public  function scopeVillagesOf($query, $districtId)
  {
    return $query->where('parent_id', $districtId)->whereRaw('LENGTH(code)=13');
  }

  public function villages()
  {
    return $this->villagesOf($this->id);
  }
}
