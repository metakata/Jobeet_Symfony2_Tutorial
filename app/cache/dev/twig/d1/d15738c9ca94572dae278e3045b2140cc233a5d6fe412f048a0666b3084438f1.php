<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_079372b4352838663036a1a4d2cae628c607e016ec5a8bfdf0ca2af8b2565060 extends Twig_Template
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
        $__internal_841c689699ca4353245c275030e9e24f86a6e08cda2e5b289f9b1ebb6c669b0d = $this->env->getExtension("native_profiler");
        $__internal_841c689699ca4353245c275030e9e24f86a6e08cda2e5b289f9b1ebb6c669b0d->enter($__internal_841c689699ca4353245c275030e9e24f86a6e08cda2e5b289f9b1ebb6c669b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_841c689699ca4353245c275030e9e24f86a6e08cda2e5b289f9b1ebb6c669b0d->leave($__internal_841c689699ca4353245c275030e9e24f86a6e08cda2e5b289f9b1ebb6c669b0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
