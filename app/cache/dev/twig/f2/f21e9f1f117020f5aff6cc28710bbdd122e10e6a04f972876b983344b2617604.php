<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_f1d2f9b2d68a3c8392477921d9305fceb0f49398d956e0f95e01c724093b0f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1df3da1651106d2277fa60218019e95b7cda88e2fd16bd6ea0b7c9c1ca3737f1 = $this->env->getExtension("native_profiler");
        $__internal_1df3da1651106d2277fa60218019e95b7cda88e2fd16bd6ea0b7c9c1ca3737f1->enter($__internal_1df3da1651106d2277fa60218019e95b7cda88e2fd16bd6ea0b7c9c1ca3737f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1df3da1651106d2277fa60218019e95b7cda88e2fd16bd6ea0b7c9c1ca3737f1->leave($__internal_1df3da1651106d2277fa60218019e95b7cda88e2fd16bd6ea0b7c9c1ca3737f1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
