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
        $__internal_5c4cab3a52dd0d3b65fe72a5ee0a00a115a7fae536986a326749196e8deddf8a = $this->env->getExtension("native_profiler");
        $__internal_5c4cab3a52dd0d3b65fe72a5ee0a00a115a7fae536986a326749196e8deddf8a->enter($__internal_5c4cab3a52dd0d3b65fe72a5ee0a00a115a7fae536986a326749196e8deddf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4cab3a52dd0d3b65fe72a5ee0a00a115a7fae536986a326749196e8deddf8a->leave($__internal_5c4cab3a52dd0d3b65fe72a5ee0a00a115a7fae536986a326749196e8deddf8a_prof);

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