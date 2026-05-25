<?php
namespace App\Services\Provider;use App\Models\Provider;use App\Services\Provider\Contracts\ProviderDriver;use App\Services\Provider\Drivers\GenericHttpProviderDriver;class ProviderManager{public function driver(Provider $provider):ProviderDriver{return new GenericHttpProviderDriver($provider);}}
