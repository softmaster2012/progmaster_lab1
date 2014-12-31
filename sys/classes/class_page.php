<?php
    class Page {
        public $id;
        public $user;
        public $title;
        public $style;
        public $script;
        public $content;
        public $template;
        
        public function __construct($page_params) {
            $this->id = $page_params['id'];
            $this->user = $page_params['user'];
            $this->title = $page_params['title'];
            $this->style = $page_params['style'];
            $this->script = $page_params['script'];
            $this->content = $page_params['content'];
            $this->template = $page_params['template'];
        }        
    }
//-end-