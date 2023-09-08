<?php
    namespace App\Controllers\Pages;

    use Luna\Utils\View;
    use Luna\Utils\Seo;
    use Luna\Utils\Page;
    use Luna\Utils\Component;

    class Home extends Page {
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
                    'link' => "https://jjrdev.gitbook.io/luna/",
                    'icon' => "book",
                    'title' => "Documentação"
                ],
                [
                    'link' => "https://github.com/jjr-dev/luna",
                    'icon' => "github",
                    'title' => "Repositório"
                ],
                [
                    'link' => "#",
                    'icon' => "box-seam",
                    'title' => "Pacote"
                ]
            ]);

            $content = View::render('home', [
                'buttons' => $buttons,
                'version' => "v2.0"
            ]);
            
            $content = parent::getPage($title, $content, ['seo' => $seo]);

            return $res->send(200, $content);
        }
    }