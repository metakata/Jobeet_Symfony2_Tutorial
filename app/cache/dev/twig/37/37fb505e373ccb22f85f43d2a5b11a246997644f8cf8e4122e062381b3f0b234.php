<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7417284705f5611505655dd290b2abd32bb68067a08aa9decf73f32eb07c7389 extends Twig_Template
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
        $__internal_2085bd12ce1ba012c2dd110383ae988071601649cf39d224b7b031fe3aa45955 = $this->env->getExtension("native_profiler");
        $__internal_2085bd12ce1ba012c2dd110383ae988071601649cf39d224b7b031fe3aa45955->enter($__internal_2085bd12ce1ba012c2dd110383ae988071601649cf39d224b7b031fe3aa45955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2085bd12ce1ba012c2dd110383ae988071601649cf39d224b7b031fe3aa45955->leave($__internal_2085bd12ce1ba012c2dd110383ae988071601649cf39d224b7b031fe3aa45955_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
