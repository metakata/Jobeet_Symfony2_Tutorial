<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_6b9e6eb4d85c9009a24212951a1f795100f47db53e2023517cfb61ebbaa5c431 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0fd11650dec39e4bd75909adaeb4507509df7e9c9a791f59b891e4baae56075 = $this->env->getExtension("native_profiler");
        $__internal_e0fd11650dec39e4bd75909adaeb4507509df7e9c9a791f59b891e4baae56075->enter($__internal_e0fd11650dec39e4bd75909adaeb4507509df7e9c9a791f59b891e4baae56075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0fd11650dec39e4bd75909adaeb4507509df7e9c9a791f59b891e4baae56075->leave($__internal_e0fd11650dec39e4bd75909adaeb4507509df7e9c9a791f59b891e4baae56075_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e298b1f84e9cb9fccf9e72660932bd64c7c6fd4c261863716a70e23c2780a13e = $this->env->getExtension("native_profiler");
        $__internal_e298b1f84e9cb9fccf9e72660932bd64c7c6fd4c261863716a70e23c2780a13e->enter($__internal_e298b1f84e9cb9fccf9e72660932bd64c7c6fd4c261863716a70e23c2780a13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e298b1f84e9cb9fccf9e72660932bd64c7c6fd4c261863716a70e23c2780a13e->leave($__internal_e298b1f84e9cb9fccf9e72660932bd64c7c6fd4c261863716a70e23c2780a13e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
