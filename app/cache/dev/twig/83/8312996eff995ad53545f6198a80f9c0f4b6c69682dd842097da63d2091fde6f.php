<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_86f1a8f73d89012dd0238aeaab164f0df8e2d6a31bb999a451866f42fc3daac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_504b72c00cad21150651cccc813bd48db2f048f7e602f8c020a7c442ec935eb9 = $this->env->getExtension("native_profiler");
        $__internal_504b72c00cad21150651cccc813bd48db2f048f7e602f8c020a7c442ec935eb9->enter($__internal_504b72c00cad21150651cccc813bd48db2f048f7e602f8c020a7c442ec935eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_504b72c00cad21150651cccc813bd48db2f048f7e602f8c020a7c442ec935eb9->leave($__internal_504b72c00cad21150651cccc813bd48db2f048f7e602f8c020a7c442ec935eb9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
