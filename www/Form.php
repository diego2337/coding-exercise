<?php

class Form {
    protected $_header;
    protected $_inputs;

    public function __construct() {
        $this->_header = `
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Simple Form</title>
                <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
            </head>
        `;
        $this->_inputs = [];
    }

    /**
     *  adds an input instance to the collection of inputs managed by this form object
     */
    public function addInput(Input $input) {
        array_push($this->_inputs, $input);
    }

    /**
     *  iterates over all inputs managed by this form and returns false if any of them don't validate
     */
    public function validate() {
        foreach ($this->_inputs as $input) {
            if (!$input->validate()) {
                return false;
            }
        }
        return true;
    }

    /**
     * returns the value of the input by $name
     */
    public function getValue($name) {
        // TODO
    }

    /**
     *  draws the outer form element, and the markup for each input, one input per row
     */
    public function display() {
        $inputs = [];
        
        foreach ($this->_inputs as $input) {
            array_push($inputs, $input->render());
        }
        $display = $this->_header . `<body>
                <div class="form-container">
                    <form class="form-box" action="#" method="post">`;
        $display = $display . implode('', $inputs);
        echo $display . `        
                    </form>
                </div>
            </body>
            </html>
        `;
    }
}
