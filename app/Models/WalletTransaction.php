<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;class WalletTransaction extends Model{protected $fillable=['user_id','wallet_id','type','amount_minor','balance_before_minor','balance_after_minor','currency_code','note','reference_type','reference_id','idempotency_key'];}
