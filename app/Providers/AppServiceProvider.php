<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use \App\User;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MAIN NAVIGATION');
            $event->menu->add([
                'text'        => 'Users',
                'url'         => 'admin/usuarios',
                'icon'        => 'users',
                'label'       => User::count(),
                'label_color' => 'success',
            ]);

            $event->menu->add('Noticias');
            $event->menu->add([
                'text'        => 'Noticias',
                'url'   =>  'admin/noticias',
                'icon'        => 'newspaper-o',
                                    
                
            ]);

            $event->menu->add('CONFIGURAÇÕES DO SITE');
            $event->menu->add([
                'text'        => 'Parceiros',
                'icon'        => 'user-times',
                'url'         => 'admin/parceiros',                                
                ]);
            $event->menu->add([
                'text'        => 'Banners',
                'icon'        => 'image',
                'url'         => 'admin/banners',                                
                ]);
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
