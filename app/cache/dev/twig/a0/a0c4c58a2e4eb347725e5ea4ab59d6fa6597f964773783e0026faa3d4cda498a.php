<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_163af31a39c25a4623b4779203658feb897099243404e60497c410989b203b3a extends Twig_Template
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
        $__internal_58b100b9ca3f7efd45f19bc0e718ce87e0ce4be73744b6baefbbc94cc3fd2306 = $this->env->getExtension("native_profiler");
        $__internal_58b100b9ca3f7efd45f19bc0e718ce87e0ce4be73744b6baefbbc94cc3fd2306->enter($__internal_58b100b9ca3f7efd45f19bc0e718ce87e0ce4be73744b6baefbbc94cc3fd2306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_58b100b9ca3f7efd45f19bc0e718ce87e0ce4be73744b6baefbbc94cc3fd2306->leave($__internal_58b100b9ca3f7efd45f19bc0e718ce87e0ce4be73744b6baefbbc94cc3fd2306_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
