<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_9b1d9322a95dd3ec54701854c9db63e61127d0ffc5df49696564a9b1305fd3bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9d6ccf016f240eba7594da59f31b532c7b34d0e94dc5e62c277782b6ff6214b = $this->env->getExtension("native_profiler");
        $__internal_d9d6ccf016f240eba7594da59f31b532c7b34d0e94dc5e62c277782b6ff6214b->enter($__internal_d9d6ccf016f240eba7594da59f31b532c7b34d0e94dc5e62c277782b6ff6214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9d6ccf016f240eba7594da59f31b532c7b34d0e94dc5e62c277782b6ff6214b->leave($__internal_d9d6ccf016f240eba7594da59f31b532c7b34d0e94dc5e62c277782b6ff6214b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_040907a552a3a1b5631353f21d1f83d76fe74ee4a277bb491bf955a500601252 = $this->env->getExtension("native_profiler");
        $__internal_040907a552a3a1b5631353f21d1f83d76fe74ee4a277bb491bf955a500601252->enter($__internal_040907a552a3a1b5631353f21d1f83d76fe74ee4a277bb491bf955a500601252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_040907a552a3a1b5631353f21d1f83d76fe74ee4a277bb491bf955a500601252->leave($__internal_040907a552a3a1b5631353f21d1f83d76fe74ee4a277bb491bf955a500601252_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
