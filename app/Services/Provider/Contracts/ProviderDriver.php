<?php
namespace App\Services\Provider\Contracts;use App\Models\TopupOrder;interface ProviderDriver{public function submitOrder(TopupOrder $order):array;public function checkStatus(TopupOrder $order):array;}
