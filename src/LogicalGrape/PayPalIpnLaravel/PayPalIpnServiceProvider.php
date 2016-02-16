<?php namespace bodeezy\PayPalIpnLaravel;

use Illuminate\Support\ServiceProvider;
use bodeezy\PayPalIpnLaravel\PayPalIpn;

class PayPalIpnServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('bodeezy/paypal-ipn-laravel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['paypalipn'] = $this->app->share(function ($app) {
            return new PayPalIpn();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('paypalipn');
	}

}