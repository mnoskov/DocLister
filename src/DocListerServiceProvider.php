<?php namespace EvolutionCMS\DocLister;

use EvolutionCMS\ServiceProvider;

class DocListerServiceProvider extends ServiceProvider
{

    protected $namespace = '';
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadSnippetsFrom(
            dirname(__DIR__). '/snippets/',
            $this->namespace
        );

        $this->loadPluginsFrom(
            dirname(__DIR__) . '/plugins/'
        );

    }
}