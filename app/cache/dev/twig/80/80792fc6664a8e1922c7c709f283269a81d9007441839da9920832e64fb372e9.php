<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_720621cc005fc8184b0b1c7daa8e8c438275ffc87991c17730fc0e8655b45a6f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_368e49c4decbdfdd5b1911851a29f7eee2acff8ab271fb7f676620fb7113fb1c = $this->env->getExtension("native_profiler");
        $__internal_368e49c4decbdfdd5b1911851a29f7eee2acff8ab271fb7f676620fb7113fb1c->enter($__internal_368e49c4decbdfdd5b1911851a29f7eee2acff8ab271fb7f676620fb7113fb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368e49c4decbdfdd5b1911851a29f7eee2acff8ab271fb7f676620fb7113fb1c->leave($__internal_368e49c4decbdfdd5b1911851a29f7eee2acff8ab271fb7f676620fb7113fb1c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ef8ed6b73522101725060f6bbb1b4359450d989295c19c67f3a19fac3cd8b12e = $this->env->getExtension("native_profiler");
        $__internal_ef8ed6b73522101725060f6bbb1b4359450d989295c19c67f3a19fac3cd8b12e->enter($__internal_ef8ed6b73522101725060f6bbb1b4359450d989295c19c67f3a19fac3cd8b12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_ef8ed6b73522101725060f6bbb1b4359450d989295c19c67f3a19fac3cd8b12e->leave($__internal_ef8ed6b73522101725060f6bbb1b4359450d989295c19c67f3a19fac3cd8b12e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
