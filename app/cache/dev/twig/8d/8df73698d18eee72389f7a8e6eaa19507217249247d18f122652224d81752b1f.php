<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7f87c9e782f634bb10d0b89f1ff463700c8dd5c341ad9998d7ecc32d463495e9 extends Twig_Template
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
        $__internal_9d494c70ce22efddc63ce0750f7a60a8c1f8210b3fc6914095118593ea9f39a6 = $this->env->getExtension("native_profiler");
        $__internal_9d494c70ce22efddc63ce0750f7a60a8c1f8210b3fc6914095118593ea9f39a6->enter($__internal_9d494c70ce22efddc63ce0750f7a60a8c1f8210b3fc6914095118593ea9f39a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_9d494c70ce22efddc63ce0750f7a60a8c1f8210b3fc6914095118593ea9f39a6->leave($__internal_9d494c70ce22efddc63ce0750f7a60a8c1f8210b3fc6914095118593ea9f39a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
