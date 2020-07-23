<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quetion extends Model
{
   public fucnction user()
   {
       return $this->belongsTo(User::class);
   }

   public fucnction replies()
   {
       return $this->hasmany(Reply::class);
   }

   public fucnction category()
   {
       return $this->belongsTo(Category::class);
   }
}
