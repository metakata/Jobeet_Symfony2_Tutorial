<?php

/* :job:edit.html.twig */
class __TwigTemplate_11d9a84ec75e4e9388e9e1b862840e770756b920c0b77b8d8fdd982c71b0edd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f549ac7936bf3691e8ec0d106f1c74c06ac546c4fabe8e04ba65b2c5c31d2fed = $this->env->getExtension("native_profiler");
        $__internal_f549ac7936bf3691e8ec0d106f1c74c06ac546c4fabe8e04ba65b2c5c31d2fed->enter($__internal_f549ac7936bf3691e8ec0d106f1c74c06ac546c4fabe8e04ba65b2c5c31d2fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f549ac7936bf3691e8ec0d106f1c74c06ac546c4fabe8e04ba65b2c5c31d2fed->leave($__internal_f549ac7936bf3691e8ec0d106f1c74c06ac546c4fabe8e04ba65b2c5c31d2fed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29881411472960a225d38a0e6e0f244b7c89276008fb47fb3b8d7090ed045de4 = $this->env->getExtension("native_profiler");
        $__internal_29881411472960a225d38a0e6e0f244b7c89276008fb47fb3b8d7090ed045de4->enter($__internal_29881411472960a225d38a0e6e0f244b7c89276008fb47fb3b8d7090ed045de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_29881411472960a225d38a0e6e0f244b7c89276008fb47fb3b8d7090ed045de4->leave($__internal_29881411472960a225d38a0e6e0f244b7c89276008fb47fb3b8d7090ed045de4_prof);

    }

    public function getTemplateName()
    {
        return ":job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
