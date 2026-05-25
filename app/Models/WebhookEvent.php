<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;class WebhookEvent extends Model{protected $fillable=['source','event_id','event_name','signature_valid','headers','payload','processing_status','error_message','processed_at'];protected $casts=['headers'=>'array','payload'=>'array','signature_valid'=>'boolean','processed_at'=>'datetime'];}
