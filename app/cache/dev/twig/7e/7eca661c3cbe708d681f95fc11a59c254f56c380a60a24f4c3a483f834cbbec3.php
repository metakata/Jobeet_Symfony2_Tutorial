<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_22e11150d6bb6cfebb7d101a9b5a3ec7ec06954cd2e4ebb8bdcb6e81528ae8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_63a2ecf227918b6c2d4214a5b3d66a4b14c4391ce1d5a35c1b11fba80174aa30 = $this->env->getExtension("native_profiler");
        $__internal_63a2ecf227918b6c2d4214a5b3d66a4b14c4391ce1d5a35c1b11fba80174aa30->enter($__internal_63a2ecf227918b6c2d4214a5b3d66a4b14c4391ce1d5a35c1b11fba80174aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a2ecf227918b6c2d4214a5b3d66a4b14c4391ce1d5a35c1b11fba80174aa30->leave($__internal_63a2ecf227918b6c2d4214a5b3d66a4b14c4391ce1d5a35c1b11fba80174aa30_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_889d73e07ee3d7b2afabc33409e810b842a5ae442261074250772c41981d529c = $this->env->getExtension("native_profiler");
        $__internal_889d73e07ee3d7b2afabc33409e810b842a5ae442261074250772c41981d529c->enter($__internal_889d73e07ee3d7b2afabc33409e810b842a5ae442261074250772c41981d529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_889d73e07ee3d7b2afabc33409e810b842a5ae442261074250772c41981d529c->leave($__internal_889d73e07ee3d7b2afabc33409e810b842a5ae442261074250772c41981d529c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
