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
        $menu->setChildrenAttribute('class', 'navbar-nav mr-auto');
        $menu->addChild('Home', ['route' => 'homepage'])
            ->setAttribute('class','nav-item')
            ->setLinkAttribute('class', "nav-link pl-0");
        $menu->addChild('Présentation et champ d\'actions', ['route' => 'presentation_action'])
            ->setAttribute('class','nav-item')
            ->setLinkAttribute('class', "nav-link");
        $menu->addChild('Références', ['route' => 'referance'])
            ->setAttribute('class','nav-item')
            ->setLinkAttribute('class', "nav-link");
        $menu->addChild('Contact', ['route' => 'contact_new'])
            ->setAttribute('class','nav-item')
            ->setLinkAttribute('class', "nav-link");
        // ... add more children

        return $menu;
    }
}