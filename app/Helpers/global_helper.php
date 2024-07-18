<?php

use App\Models\MetaData;

function getMetaValue($meta_key) {
    $data = MetaData::where('meta_key', $meta_key)->first();
    if ($data) {
        return $data->meta_value;
    }
}