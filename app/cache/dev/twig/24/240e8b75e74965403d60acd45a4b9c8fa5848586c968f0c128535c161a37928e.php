<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_f5f47c802abdd71991301478ae08b0e62c8c51ef3f38f9025851d2eb5b0d66f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_b78b1efc5db7164b758c0896064880ddc28afe7366b98609d4709d5e0f719247 = $this->env->getExtension("native_profiler");
        $__internal_b78b1efc5db7164b758c0896064880ddc28afe7366b98609d4709d5e0f719247->enter($__internal_b78b1efc5db7164b758c0896064880ddc28afe7366b98609d4709d5e0f719247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b78b1efc5db7164b758c0896064880ddc28afe7366b98609d4709d5e0f719247->leave($__internal_b78b1efc5db7164b758c0896064880ddc28afe7366b98609d4709d5e0f719247_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_a233387d51e599d9d385ae116a0b1ba4c3d71b49dc51059ef9dc318ec0b3305b = $this->env->getExtension("native_profiler");
        $__internal_a233387d51e599d9d385ae116a0b1ba4c3d71b49dc51059ef9dc318ec0b3305b->enter($__internal_a233387d51e599d9d385ae116a0b1ba4c3d71b49dc51059ef9dc318ec0b3305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_a233387d51e599d9d385ae116a0b1ba4c3d71b49dc51059ef9dc318ec0b3305b->leave($__internal_a233387d51e599d9d385ae116a0b1ba4c3d71b49dc51059ef9dc318ec0b3305b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
