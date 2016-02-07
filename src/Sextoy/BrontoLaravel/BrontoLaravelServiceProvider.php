<?php namespace Sextoy\BrontoLaravel;

use Illuminate\Support\ServiceProvider;
use Bronto_Api;

class BrontoLaravelServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('bronto', function($app)
		{
			$token = $app['config']->get('services.bronto.token');
			$bronto = new Bronto_Api();

			if (! is_null($token)) {
				$bronto->setToken($token);
				$bronto->login();
			}

			return $bronto;
		});
	}

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'sextoy/bronto-laravel', 'bronto');
	}
}
