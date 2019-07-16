<?php

namespace App\Helper;

class FormHelper
{

    public function __construct($action, $method, $class)
    {
        $this->html = '<form class="'.$class.'" action="'.$action.'" method="'.$method.'">';
    }
    public function addInput($attributes, $label='', $class='')
    {
        //implementuoti Label
        $html = '';
        $html.= '<input ';
        foreach ($attributes as $key => $element){
            $html .= ' '.$key.'="'.$element.'"';
        }
        $html .= ' >';
        if($class != ''){
            $html = $this->wrapElement($class, $html);
        }
        $this->html .= $html;
        return $this;
    }
    //button
    public function addButton($attributes, $label='', $class='')
    {
        //implementuoti Label
        $html = '';
        $html.= '<button ';
        foreach ($attributes as $key => $element){
            $html .= ' '.$key.'="'.$element.'"';
        }
        $html .= ' >Continue</button>';
        if($class != ''){
            $html = $this->wrapElement($class, $html);
        }
        $this->html .= $html;
        return $this;
    }
    //selectas
    public function addSelect($options, $name, $class='', $label='')
    {
        //implementuoti Label
        $html = '';
        $html.= '<select name="'.$name.'">';
        foreach ($options as $value => $option){
            $html .= '<option value="'.$value.'"';
            $html .= ' >';
            $html .= ucfirst($option);
            $html .= '</options>';
        }
        $html .= '</select>';
        if($class != ''){
            $html = $this->wrapElement($class, $html);
        }
        $this->html .= $html;
        return $this;
    }
    //textarea
    public function addTextarea($attributes, $value = '', $label = "", $class = "")
    {
        $html = '';
        if ($label != '') {
            if (isset($attributes['id'])) {
                $for = 'for="' . $attributes['id'] . '"';
            } else {
                $for = "";
            }
            $html .= '<label ' . $for . '>' . $label . '</label>';
        }
        $html .= '<textarea ';
        foreach ($attributes as $key => $element) {
            $html .= ' ' . $key . '="' . $element . '"';
        }
        $html .= ' >';
        $html .= $value;
        $html .= '</textarea>';
        if ($class != '') {
            $html = $this->wrapElement($class, $html);
        }
        $this->html .= $html;
        return $this;
    }

    public function get()
    {
        $this->html .= '</form>';
        return $this->html;
    }

    public function wrapElement($class, $html)
    {
        $html = '<div class="' . $class . '">' . $html . '</div>';
        return $html;
    }
}

//    public function addInput($atributes, $label='', $wrapper='', $formtitle='')
//    {
//        //implementing label
//        $html = '';
//        $html .= '<h2>'.$formtitle.'</h2><input ';
//        foreach($atributes as $key =>   $element) {
//            $html .= ' '.$key.'="'.$element.'"';
//        }
//        $html .= ' >';
//        if ($wrapper  != '') {
//            $html = '<div class="'.$wrapper.'">'.$html.'</div>';
//        }
//        $this->html .= $html;
//        return $this;
//    }
//
//    //select
//
//    public function addSelect($options, $name, $wrapper='', $label='')
//    {
//        $html = '';
//        $html.= '<select name="'.$name.'">';
//        foreach ($options as $value => $option) {
//            $html .= '<option value="'.$value.'"';
//            $html .= ' >';
//            $html .= ucfirst($option);
//            $html .= '</option>';
//        }
//        $html .='</select>';
//        if ($wrapper != '') {
//            $html = '<div class="'.$wrapper.'">'.$html.'</div>';
//        }
//        $this->html .= $html;
//        return $this;
//    }
//
//    //textarea
//    public function addTextarea($attributes, $name, $value, $wrapper='', $label='')
//    {
//        //implementuoti Label
//        $html = '';
//        $html.= '<textarea name="'.$name.'"';
//        foreach ($attributes as $key => $element){
//            $html .= ' '.$key.'="'.$element.'"';
//        }
//        $html .= ' >';
//        $html .= $value;
//        $html .= '</textarea>';
//        if($wrapper != ''){
//            $html = '<div class="'.$wrapper.'">'.$html.'</div>';
//        }
//        $this->html .= $html;
//        return $this;
//    }
//    public function get()
//    {
//        $this->html .= '</form>';
//        return $this->html;
//    }

//}

//    public function input($textBeforeInput = '', $type, $class = '', $name, $placeholder = '', $value = '', $required = 0, $textAfterInput = '')
//    {
//        if ($required == 0) {
//            $required = '';
//        } elseif ($required == 1 && $type == 'radio') {
//            $required = 'checked';
//        } elseif ($required == 1) {
//            $required = 'required';
//        }
//        $html  = '';
//        $html .= "$textBeforeInput<input type='$type' class='$class' name='$name' placeholder='$placeholder' value='$value' $required>$textAfterInput";
//        $this->html .= $html;
//        return $this;
//    }
//
//    public function textArea($class = '', $name, $value = '', $rows, $cols)
//    {
//    $html = "";
//    $html .= "<textarea class='$class' name='$name' rows='$rows' cols='$cols'>";
//    $html .= $value;
//    $html .=    "<textarea/>";
//    $this->html .= $html;
//    return $this;
//    }
//
//    public  function select($valueAndName)
//    {
//    $html = "";
//    $html .= "<select>";
//    foreach($valueAndName as $value) {
//        $html .= "option value='$value'>$value<option/>";
//    }
//    $html .= "</select>";
//    $this->html .= $html;
//    return $this;
//
//    }
//
//    public function closeForm($value)
//    {
//    $this->html .= "<input type='submit' name='submit' value='$value'>";
//    $this->html .= "</form>";
//    return $this;
//    }
//
//    public function build()
//    {
//    return $this->html;
//    }
//}