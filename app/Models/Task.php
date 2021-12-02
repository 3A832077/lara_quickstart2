<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
	protected $fillable = ['name'];
	
	$user = App\User::find(1);
    foreach ($user->tasks as $task) {
    echo $task->name;
}
   public function user()
    {
        return $this->belongsTo(User::class);
    }
}
