<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f8f072f50dae03d10dc9829509eabfbdd0f62d60bdf716d38b640ea16a4d77bb extends Twig_Template
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
        $__internal_08fc073394c3e2dd5def0c79b9f3d4603f5f0ff109bee54c26f9121003030faa = $this->env->getExtension("native_profiler");
        $__internal_08fc073394c3e2dd5def0c79b9f3d4603f5f0ff109bee54c26f9121003030faa->enter($__internal_08fc073394c3e2dd5def0c79b9f3d4603f5f0ff109bee54c26f9121003030faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_08fc073394c3e2dd5def0c79b9f3d4603f5f0ff109bee54c26f9121003030faa->leave($__internal_08fc073394c3e2dd5def0c79b9f3d4603f5f0ff109bee54c26f9121003030faa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
