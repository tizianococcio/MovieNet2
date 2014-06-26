<?php
// src/Tiziano/MovieNetBundle/Menu/Builder.php
namespace Tiziano\MovieNetBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'home'));
        $menu->addChild('Nuovo Film', array('route' => 'film_nuovo'));
        $menu->addChild('Nuovo Regista', array('route' => 'registi_nuovo'));
        $menu->addChild('Nuovo Genere', array('route' => 'genere_nuovo'));
        $menu->addChild('Lista Film', array('route' => 'film'));

        /*
        $menu->addChild('About Me', array(
            'route' => 'page_show',
            'routeParameters' => array('id' => 42)
        ));
        */

        return $menu;
    }
}