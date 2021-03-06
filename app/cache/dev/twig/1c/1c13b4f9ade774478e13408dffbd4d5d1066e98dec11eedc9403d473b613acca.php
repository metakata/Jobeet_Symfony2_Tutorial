<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7b2fac19d7fe51da01dd02ce1174ecbc84d4d2292dc1ec8e5644eca9ffa489e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e6d8638674612bb043084baa9752fafb9d021f7e9eed4f052b1fce51a8774ef = $this->env->getExtension("native_profiler");
        $__internal_8e6d8638674612bb043084baa9752fafb9d021f7e9eed4f052b1fce51a8774ef->enter($__internal_8e6d8638674612bb043084baa9752fafb9d021f7e9eed4f052b1fce51a8774ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e6d8638674612bb043084baa9752fafb9d021f7e9eed4f052b1fce51a8774ef->leave($__internal_8e6d8638674612bb043084baa9752fafb9d021f7e9eed4f052b1fce51a8774ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c7bcced6703b0cfc05d08065815381ed8724c9ddf5fe402d287af62f4f5171f = $this->env->getExtension("native_profiler");
        $__internal_4c7bcced6703b0cfc05d08065815381ed8724c9ddf5fe402d287af62f4f5171f->enter($__internal_4c7bcced6703b0cfc05d08065815381ed8724c9ddf5fe402d287af62f4f5171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4c7bcced6703b0cfc05d08065815381ed8724c9ddf5fe402d287af62f4f5171f->leave($__internal_4c7bcced6703b0cfc05d08065815381ed8724c9ddf5fe402d287af62f4f5171f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b43eeadb9156d4e440355821f6baa231039a02b19df01f50140a10c020eab4 = $this->env->getExtension("native_profiler");
        $__internal_64b43eeadb9156d4e440355821f6baa231039a02b19df01f50140a10c020eab4->enter($__internal_64b43eeadb9156d4e440355821f6baa231039a02b19df01f50140a10c020eab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_64b43eeadb9156d4e440355821f6baa231039a02b19df01f50140a10c020eab4->leave($__internal_64b43eeadb9156d4e440355821f6baa231039a02b19df01f50140a10c020eab4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
