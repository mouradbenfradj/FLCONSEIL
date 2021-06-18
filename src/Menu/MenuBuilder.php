<?php


namespace App\Menu;


use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;

class MenuBuilder
{
    private $factory;

    /**
     * Add any other dependency you need...
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options): ItemInterface
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', ['route' => 'homepage']);
        $menu->addChild('Présentation et champ d\'actions', ['route' => 'presentation_action']);
        $menu->addChild('Références', ['route' => 'referance']);
        $menu->addChild('Contact', ['route' => 'contact_new']);
        // ... add more children

        return $menu;
    }
}