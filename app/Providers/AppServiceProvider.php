<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Schema;


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

        Schema::defaultStringLength(191);


        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MAIN NAVIGATION');
            $event->menu->add([
                'text'        => 'Ver Site',
                'url'         => '',
                'icon'        => 'web',
                
            ]);
            $event->menu->add([
                'text'        => 'Usuários',
                'url'         => 'admin/usuarios',
                'icon'        => 'users',
                'label'       => User::count(),
                'label_color' => 'success',
            ]);

            $event->menu->add('Conteúdo');
            $event->menu->add([
                'text'        => 'Noticias',
                'url'         =>  'admin/noticias',
                'icon'        => 'newspaper-o',
                                    
                
            ]);
            $event->menu->add([
                'text'        => 'Cursos',
                'url'         =>  'admin/cursos',
                'icon'        => 'newspaper-o',
                                    
                
            ]);

            $event->menu->add([
                'text'        => 'Aprendizes',
                'url'         =>  'admin/aprendizes',
                'icon'        => 'newspaper-o',
                                    
                
            ]);

            

            $event->menu->add('CONFIGURAÇÕES DO SITE');
            
            
            
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
