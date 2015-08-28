<?php

	namespace Uneak\TemplatesManagerBundle\Templates;

    use Symfony\Component\DependencyInjection\ContainerInterface;

	class TemplatesManager {

        protected $templates;

        public function __construct(ContainerInterface $container) {
            $this->templates = $container->getParameter("uneak_templates");
        }

        public function all() {
            return $this->templates;
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
