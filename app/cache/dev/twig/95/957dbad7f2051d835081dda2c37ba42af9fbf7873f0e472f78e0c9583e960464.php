<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0e975b0927946b2f39c22f0d4b6613ad355b50b88d0689791907fd92d0b7ddea extends Twig_Template
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
        $__internal_07543d29cc609ba84bc878155b7eec1db8b17865a1810e6e2b8850486c0605a9 = $this->env->getExtension("native_profiler");
        $__internal_07543d29cc609ba84bc878155b7eec1db8b17865a1810e6e2b8850486c0605a9->enter($__internal_07543d29cc609ba84bc878155b7eec1db8b17865a1810e6e2b8850486c0605a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_07543d29cc609ba84bc878155b7eec1db8b17865a1810e6e2b8850486c0605a9->leave($__internal_07543d29cc609ba84bc878155b7eec1db8b17865a1810e6e2b8850486c0605a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
