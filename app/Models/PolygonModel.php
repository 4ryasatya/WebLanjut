<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PolygonModel extends Model
{
    protected $table = 'polygon';
    protected $guarded = ['id'];

    public function geojson_polygon()
    {
        $polygon = $this->select(DB::raw('id, st_asgeojson(geom) as geom, name, description,
        st_area(geom, true)/1000000 as luas_km2, st_area(geom, true)/10000 as luas_hektar, created_at, updated_at'))->get();

        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        foreach ($polygon as $p) {
            $feature = [
                'type' => 'Feature',
                'geometry' => json_decode($p->geom),
                'properties' => [
                    'name' => $p->name,
                    'luas_hektar' => $p->luas_hektar,
                    'description' => $p->description,
                    'created_at' => $p->created_at,
                    'updated_at' => $p->updated_at
                ],
            ];

            array_push($geojson['features'], $feature);
        }

        return $geojson;
    }
}
