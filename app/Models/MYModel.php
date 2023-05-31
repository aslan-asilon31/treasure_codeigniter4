<?php

namespace App\Models;

use CodeIgniter\Model;

class MYModel extends Model
{
    
    public function hasMany($relatedModel, $foreignKey = null)
    {
        $relatedModel = new $relatedModel();

        if (empty($foreignKey)) {
            $foreignKey = $this->table . '_id';
        }

        return $this->builder()
            ->where($foreignKey, $this->primaryKey)
            ->get();
    }



}
