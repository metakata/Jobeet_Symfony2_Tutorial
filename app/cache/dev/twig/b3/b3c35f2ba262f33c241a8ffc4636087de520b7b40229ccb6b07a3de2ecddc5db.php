<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_6d29ce521e8e0df802bdd474c52aaba70bd276eaa2011b65c46beff93a759bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e6593e0e294c9d568fddc7f6001b71795dd1835cb1c272445eddd9448c6904a = $this->env->getExtension("native_profiler");
        $__internal_9e6593e0e294c9d568fddc7f6001b71795dd1835cb1c272445eddd9448c6904a->enter($__internal_9e6593e0e294c9d568fddc7f6001b71795dd1835cb1c272445eddd9448c6904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6593e0e294c9d568fddc7f6001b71795dd1835cb1c272445eddd9448c6904a->leave($__internal_9e6593e0e294c9d568fddc7f6001b71795dd1835cb1c272445eddd9448c6904a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
