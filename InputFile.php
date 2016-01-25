<?php

namespace sibds\widgets;

class InputFile extends \mihaildev\elfinder\InputFile
{
    public $language = 'ru';
    public $controller = 'elfinder';
    public $template = '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>';
    public $options = ['class' => 'form-control'];
    public $buttonName = '<i class="fa fa-folder-open-o" title="Файлы"></i>';
    public $buttonOptions = ['class' => 'btn btn-default'];
    public $multiple = false;
}
