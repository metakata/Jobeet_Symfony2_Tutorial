<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_588f2626bb38b0f0dcdfbfc58c18473e807f22db65702f55ef013af3fb3cd32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cffa9387c225f4364835e2058c992c193999f819c1948eb47a5ba890c23239f = $this->env->getExtension("native_profiler");
        $__internal_3cffa9387c225f4364835e2058c992c193999f819c1948eb47a5ba890c23239f->enter($__internal_3cffa9387c225f4364835e2058c992c193999f819c1948eb47a5ba890c23239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cffa9387c225f4364835e2058c992c193999f819c1948eb47a5ba890c23239f->leave($__internal_3cffa9387c225f4364835e2058c992c193999f819c1948eb47a5ba890c23239f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
