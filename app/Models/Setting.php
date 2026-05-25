<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;class Setting extends Model{protected $fillable=['group_key','item_key','value','type','is_public'];}
