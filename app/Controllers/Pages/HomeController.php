<?php
namespace App\Controllers\Pages;

use Luna\Utils\View;
use Luna\Utils\Seo;
use Luna\Utils\Controller;
use Luna\Utils\Component;

class HomeController extends Controller {
    static function homePage($req, $res) {
        $title = 'Luna';

        $seo = new Seo();
        $seo->setTitle($title);
        $seo->setDescription('Framework MVC em PHP');
        $seo->setKeywords(['php', 'mvc', 'framework', 'luna']);
        $seo->meta()->setType('website');
        $seo = $seo->render();

        $buttons = Component::multiRender('button', [
            [
                'link' => "https://github.com/jjr-dev/luna-framework/tree/{{version}}/readme.md#aprendendo-luna",
                'icon' => "graduation-cap",
                'title' => "Documentação"
            ],
            [
                'link' => "https://github.com/jjr-dev/luna-framework",
                'icon' => "github",
                'title' => "GitHub"
            ],
            [
                'link' => "https://packagist.org/packages/phpluna/luna",
                'icon' => "package",
                'title' => "Packagist"
            ]
        ]);

        $content = View::render('home', [
            'buttons' => $buttons,
            'version' => "v2.0.5"
        ]);

        $content = parent::page($title, $content, [
            'seo' => $seo,
        ]);

        return $res->send(200, $content);
    }
}