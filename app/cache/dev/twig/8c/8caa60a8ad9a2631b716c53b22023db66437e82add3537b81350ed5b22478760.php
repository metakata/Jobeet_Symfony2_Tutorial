<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1d3340d33f8865b6c46e60c9170ff0506bbcb52ce0fd0a608ae8938be066e8a2 extends Twig_Template
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
        $__internal_d4a954074a4c16624cd3c1cf6da89e57a98a5c106befcef308dfbc762deaf800 = $this->env->getExtension("native_profiler");
        $__internal_d4a954074a4c16624cd3c1cf6da89e57a98a5c106befcef308dfbc762deaf800->enter($__internal_d4a954074a4c16624cd3c1cf6da89e57a98a5c106befcef308dfbc762deaf800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d4a954074a4c16624cd3c1cf6da89e57a98a5c106befcef308dfbc762deaf800->leave($__internal_d4a954074a4c16624cd3c1cf6da89e57a98a5c106befcef308dfbc762deaf800_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */