<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0c0a6783eedf6e8f37849eb450216035b5305a14b5d306773065e1ca2c2941bd extends Twig_Template
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
        $__internal_242fc2494cc3796070954c07c6a197dd691e252294b5bcbcbd78f50f08543ba7 = $this->env->getExtension("native_profiler");
        $__internal_242fc2494cc3796070954c07c6a197dd691e252294b5bcbcbd78f50f08543ba7->enter($__internal_242fc2494cc3796070954c07c6a197dd691e252294b5bcbcbd78f50f08543ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_242fc2494cc3796070954c07c6a197dd691e252294b5bcbcbd78f50f08543ba7->leave($__internal_242fc2494cc3796070954c07c6a197dd691e252294b5bcbcbd78f50f08543ba7_prof);

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
