<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_476f8cd03a3531e7dba7b6eaafe28db4175e58d0ffb069c3b605415427cf6772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87cabf84a8860143d98891663867b5eec9bbbd56c4d8418d62d73773735586fb = $this->env->getExtension("native_profiler");
        $__internal_87cabf84a8860143d98891663867b5eec9bbbd56c4d8418d62d73773735586fb->enter($__internal_87cabf84a8860143d98891663867b5eec9bbbd56c4d8418d62d73773735586fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87cabf84a8860143d98891663867b5eec9bbbd56c4d8418d62d73773735586fb->leave($__internal_87cabf84a8860143d98891663867b5eec9bbbd56c4d8418d62d73773735586fb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eaf28637472d825ac9218ae47b50e3536d7420691540714fde1baa8eb67c82ba = $this->env->getExtension("native_profiler");
        $__internal_eaf28637472d825ac9218ae47b50e3536d7420691540714fde1baa8eb67c82ba->enter($__internal_eaf28637472d825ac9218ae47b50e3536d7420691540714fde1baa8eb67c82ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eaf28637472d825ac9218ae47b50e3536d7420691540714fde1baa8eb67c82ba->leave($__internal_eaf28637472d825ac9218ae47b50e3536d7420691540714fde1baa8eb67c82ba_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
