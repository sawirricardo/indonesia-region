<?php

namespace Sawirricardo\IndonesiaRegion\Traits;

trait InteractsWithIndonesiaRegion
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function indonesiaRegion()
    {
        return $this->belongsTo(config('indonesia-region.model'));
    }
}
