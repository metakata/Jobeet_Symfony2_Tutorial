<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_0cf637740209fa4c9aefe738bd149a0c548b36724ce9ce0d5c69e0c22fbdef8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f5b7b2793b3230767bb926575ac17bdcf17505251c3c872ff127b5e8ad9a41d = $this->env->getExtension("native_profiler");
        $__internal_8f5b7b2793b3230767bb926575ac17bdcf17505251c3c872ff127b5e8ad9a41d->enter($__internal_8f5b7b2793b3230767bb926575ac17bdcf17505251c3c872ff127b5e8ad9a41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5b7b2793b3230767bb926575ac17bdcf17505251c3c872ff127b5e8ad9a41d->leave($__internal_8f5b7b2793b3230767bb926575ac17bdcf17505251c3c872ff127b5e8ad9a41d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
