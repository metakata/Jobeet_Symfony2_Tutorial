<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_f71575cb8fbee9f42950bc1c30c158a89e0d59771ea7313b63b1ac90100508e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9af8cc1fc3ba0b9eea170d47c2af510685d4ec28cf39249fc2f46a4aced595b2 = $this->env->getExtension("native_profiler");
        $__internal_9af8cc1fc3ba0b9eea170d47c2af510685d4ec28cf39249fc2f46a4aced595b2->enter($__internal_9af8cc1fc3ba0b9eea170d47c2af510685d4ec28cf39249fc2f46a4aced595b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af8cc1fc3ba0b9eea170d47c2af510685d4ec28cf39249fc2f46a4aced595b2->leave($__internal_9af8cc1fc3ba0b9eea170d47c2af510685d4ec28cf39249fc2f46a4aced595b2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_15e943df330761f20c9e5830c270c61dbbb6a7c5694c4215be32e9ab958d9128 = $this->env->getExtension("native_profiler");
        $__internal_15e943df330761f20c9e5830c270c61dbbb6a7c5694c4215be32e9ab958d9128->enter($__internal_15e943df330761f20c9e5830c270c61dbbb6a7c5694c4215be32e9ab958d9128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_15e943df330761f20c9e5830c270c61dbbb6a7c5694c4215be32e9ab958d9128->leave($__internal_15e943df330761f20c9e5830c270c61dbbb6a7c5694c4215be32e9ab958d9128_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
