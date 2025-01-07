<?php
namespace Pancakezys\HelloWorldPlugin;

class Plugin {
    public function __construct() {
        add_action('wp_footer', [$this, 'hello_world']);
    }

    public function hello_world() {
        echo "<p>Hello World from Pancakezys Plugin!</p>";
    }
}
