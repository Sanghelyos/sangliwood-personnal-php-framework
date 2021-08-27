<?php
namespace App\DefaultApp;

/**
 * Renderer
 */
class Renderer
{
    
    /**
     * Render
     *
     * @param  string $content_path
     * @param  array $data
     * @param  bool $isnavbar
     * @param  bool $isfooter
     * @return void
     */
    public static function Render (string $content_path, array $data = [], bool $isnavbar = true, bool $isfooter = true): void {

        extract($data);

        //navbar
        if ($isnavbar === true) {

            ob_start();
            require('vue/layouts/navbar.html.php');
            $navbar = ob_get_clean();
        }
        //footer
        if ($isfooter === true) {
            ob_start();
            require('vue/layouts/footer.html.php');
            $footer = ob_get_clean();
        }

        ob_start();
        require('vue/content/' . $content_path . '.html.php');
        $page_content = ob_get_clean();
        require('vue/layouts/layout.html.php');
    }
    
    /**
     * Render_specific_layout
     * BETA
     *
     * @param  string $content_path
     * @param  string $layout
     * @param  array $data
     * @param  bool $isnavbar
     * @param  bool $isfooter
     * @return void
     */
    public static function Render_specific_layout(string $content_path, string $layout, array $data = [], bool $isnavbar = true, bool $isfooter = true): void {

        extract($data);
        //navbar
        if ($isnavbar === true) {
            ob_start();
            require('vue/layouts/navbar.html.php');
            $navbar = ob_get_clean();
        }
        else {
            $navbar = NULL;
        }

        //footer
        if ($isfooter === true) {
            ob_start();
            require('vue/layouts/footer.html.php');
            $footer = ob_get_clean();
        }
        else {
            $footer = NULL;
        }

        // ob_start();
        // require('vue/content/'.$content_path.'.html.php');
        // $page_content = ob_get_clean();
        // require('vue/layouts/layout.html.php');

        ob_start();
        require('vue/content/' . $content_path . '.html.php');
        $page_content = ob_get_clean();
        require('vue/layouts/' . $layout . '.html.php');
    }



    // public static function Render(string $content_path, array $donnees = []): void{

    //     extract($donnees);

    //     ob_start();
    //     require('vue/content/'.$content_path.'.html.php');
    //     $page_content = ob_get_clean();
    //     require('vue/layouts/layout.html.php');
    // }

    // public static function Render_specific_layout(string $content_path, string $layout, array $donnees = []): void{

    //     extract($donnees);

    //     ob_start();
    //     require('vue/content/'.$content_path.'.html.php');
    //     $page_content = ob_get_clean();
    //     require('vue/layouts/'.$layout.'.html.php');
    // }


}