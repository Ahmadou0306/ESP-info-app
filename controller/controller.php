<?php
class Controller {
    public function render($view, $data = []) {
        extract($data);
        require_once "vue/view/{$view}.php";        
    }
}
?>
