<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public fucnction quetion()
   {
       return $this->belongsTo(Quetion::class);
   }

   public fucnction user()
   {
       return $this->belongsTo(User::class);
   }

   public fucnction like()
   {
       return $this->hasMany(Like::class);
   }
}
