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
        $__internal_61ac0a16e0c1397909f06975e6743732b677da23d821a84708304bec5c568d7c = $this->env->getExtension("native_profiler");
        $__internal_61ac0a16e0c1397909f06975e6743732b677da23d821a84708304bec5c568d7c->enter($__internal_61ac0a16e0c1397909f06975e6743732b677da23d821a84708304bec5c568d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ac0a16e0c1397909f06975e6743732b677da23d821a84708304bec5c568d7c->leave($__internal_61ac0a16e0c1397909f06975e6743732b677da23d821a84708304bec5c568d7c_prof);

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
