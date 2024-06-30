<?php
include 'Input.php';

class TextInput extends Input {
    public function __construct($name, $label, $initVal) {
        Input::__construct($name, $label, $initVal);
    }

    public function validate() {
        echo 'method yet not implemented';
    }

    public function render() {
        $label = Input::render();
        return $label . $this->_renderSetting();
    }

    protected function _renderSetting() {
        return `<input type="text" id="$this->_label" name="$this->_label"><br>`;
    }
}