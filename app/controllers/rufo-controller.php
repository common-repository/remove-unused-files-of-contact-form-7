<?php

namespace RufoCF7;

use \is_plugin_active;
use \is_singular;
use \has_shortcode;
use \deactivate_plugins;
use \wp_die;

class RufoController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->main();
    }


    public function main()
    {
        $this->on('wp', 'page_has_contact_form');
    }

    public function activate()
    {
    }

    public function deactivate()
    {
    }

    public function page_has_contact_form()
    {

        global $post;

        if (is_singular()) {
            $content = $post->post_content;
            if (has_shortcode($content, 'contact-form-7')) {
                return true;
            }
        }
        $this->dont_load_static_files();
    }
    public function dont_load_static_files()
    {
        $this->filter('wpcf7_load_js', 'false');
        $this->filter('wpcf7_load_css', 'false');
    }
}
