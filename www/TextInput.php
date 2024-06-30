<?php
include 'Input.php';

class TextInput extends Input {
    public function __construct($name, $label, $initVal) {
        Input::__construct($name, $label, $initVal);
    }

    public function validate() {
        return true;
        return is_string($name) && is_string($label) && is_string($initVal);
    }

    public function render() {
        $label = "<div class=\"form-group\">" . Input::render();
        return $label . $this->_renderSetting() . "</div>";
        
    }

    protected function _renderSetting() {
        return "<input type=\"text\" id=\"$this->_label\" name=\"$this->_label\" value=\"$this->_initVal\"><br>";
    }
}