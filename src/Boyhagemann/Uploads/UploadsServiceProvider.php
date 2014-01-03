<?php namespace Boyhagemann\Uploads;

use Illuminate\Support\ServiceProvider;
use Route, Config;

class UploadsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->package('uploads', 'uploads');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->make('formbuilder')->register('file', 'Boyhagemann\Uploads\Form\FileElement');


		Route::get('uploads/{path}', 'Boyhagemann\Uploads\Controller\DownloadController@file')->where('path', '.*');
		Route::get('image/{width}/{height}/{path}', 'Boyhagemann\Uploads\Controller\DownloadController@image')->where('path', '.*');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('uploads');
	}

}