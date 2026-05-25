<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;class Game extends Model{protected $fillable=['category_id','name','slug','image','cover_3d','description','is_active','requires_server_id','requires_player_id','sort_order'];public function category(){return $this->belongsTo(GameCategory::class,'category_id');}public function packages(){return $this->hasMany(GamePackage::class);}}
