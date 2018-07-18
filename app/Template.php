<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $casts = [
        'form_structure' => 'collection',
        'doc_structure' => 'collection',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'form_structure', 'doc_structure', 'category_id', 'due_date', 'last_progress_step', 'completed', 'created_by', 'authorized_by',
    ];
}
