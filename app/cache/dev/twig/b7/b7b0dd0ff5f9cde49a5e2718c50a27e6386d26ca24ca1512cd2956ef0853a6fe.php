<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b68379fd9ef47a7b121c53ec889360537dbae93b085f477d94a806103aab5675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab2ef722cb963c6087c0804976f6611f4c62f495ad1760260bc9b5ada5a3a6ec = $this->env->getExtension("native_profiler");
        $__internal_ab2ef722cb963c6087c0804976f6611f4c62f495ad1760260bc9b5ada5a3a6ec->enter($__internal_ab2ef722cb963c6087c0804976f6611f4c62f495ad1760260bc9b5ada5a3a6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ab2ef722cb963c6087c0804976f6611f4c62f495ad1760260bc9b5ada5a3a6ec->leave($__internal_ab2ef722cb963c6087c0804976f6611f4c62f495ad1760260bc9b5ada5a3a6ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
