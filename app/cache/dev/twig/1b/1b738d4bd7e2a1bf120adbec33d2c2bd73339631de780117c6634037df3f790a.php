<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_c79e68ddfa45fa66b42c55787900d57ca06aa93494b46510e26280638015c4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e152d8980865e20507afa4bed07e12cf9eee876d201e60de96b7dd92e65882 = $this->env->getExtension("native_profiler");
        $__internal_96e152d8980865e20507afa4bed07e12cf9eee876d201e60de96b7dd92e65882->enter($__internal_96e152d8980865e20507afa4bed07e12cf9eee876d201e60de96b7dd92e65882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e152d8980865e20507afa4bed07e12cf9eee876d201e60de96b7dd92e65882->leave($__internal_96e152d8980865e20507afa4bed07e12cf9eee876d201e60de96b7dd92e65882_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
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
/* {% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}*/
/* */
