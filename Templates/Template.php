<?php

	namespace Uneak\TemplatesManagerBundle\Templates;

	class Template {

        protected $templates;

        public function __construct($templates) {
            $this->templates = $templates;
        }

        public function get($id) {
            if (!isset($this->templates[$id])) {
                // TODO lever une exeption
            }
            return $this->templates[$id];
        }

        public function set($id, $template, $override = true) {
            if ($override) {
                $this->templates[$id] = $template;
            } else if (!isset($this->templates[$id])) {
                $this->templates[$id] = $template;
            }

            return $this;
        }

        public function has($id) {
            return isset($this->templates[$id]);
        }

        public function remove($id) {
            unset($this->templates[$id]);
            return $this;
        }


    }
