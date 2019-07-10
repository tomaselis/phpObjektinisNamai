<?php

namespace App\Helper;

class FormHelper
{
    public $html;

    public function __construct($action, $method)
    {
        $this->html = "<form action='$action' method='$method'>";
    }

    public function input($textBeforeInput = '', $type, $class = '', $name, $placeholder = '', $value = '', $required = 0, $textAfterInput = '')
    {
        if ($required == 0) {
            $required = '';
        } elseif ($required == 1 && $type == 'radio') {
            $required = 'checked';
        } elseif ($required == 1) {
            $required = 'required';
        }
        $html  = '';
        $html .= "$textBeforeInput<input type='$type' class='$class' name='$name' placeholder='$placeholder' value='$value' $required>$textAfterInput";
        $this->html .= $html;
        return $this;
    }

    public function textArea($class = '', $name, $value = '', $rows, $cols)
    {
    $html = "";
    $html .= "<textarea class='$class' name='$name' rows='$rows' cols='$cols'>";
    $html .= $value;
    $html .=    "<textarea/>";
    $this->html .= $html;
    return $this;
    }

    public  function select($valueAndName)
    {
    $html = "";
    $html .= "<select>";
    foreach($valueAndName as $value) {
        $html .= "option value='$value'>$value<option/>";
    }
    $html .= "</select>";
    $this->html .= $html;
    return $this;

    }

    public function closeForm($value)
    {
    $this->html .= "<input type='submit' name='submit' value='$value'>";
    $this->html .= "</form>";
    return $this;
    }

    public function build()
    {
    return $this->html;
    }
}