<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;class Provider extends Model{protected $fillable=['name','slug','driver','base_url','auth_type','api_key','api_secret','webhook_secret','submit_endpoint','status_endpoint','timeout_seconds','retry_count','status','config'];protected $casts=['config'=>'array'];public function packages(){return $this->hasMany(GamePackage::class);}}
