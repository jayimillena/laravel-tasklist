<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'title', 'description', 'long_description', 
        'completed', 'created_at', 'updated_at'
    ];
    
    protected $table = "tasks";

    use HasFactory;

    public function toggleComplete()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}