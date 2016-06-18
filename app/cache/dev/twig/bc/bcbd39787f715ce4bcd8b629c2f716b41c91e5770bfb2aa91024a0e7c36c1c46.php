<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_a8c9a8bc1b8a6f90ad4b9e19ae663b6e37ea6df5faf6b0f01bd3ff0f834a7efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_908a478641bf57b493185dafd949767c75a3189a413eb8b22fb2105de615d6a7 = $this->env->getExtension("native_profiler");
        $__internal_908a478641bf57b493185dafd949767c75a3189a413eb8b22fb2105de615d6a7->enter($__internal_908a478641bf57b493185dafd949767c75a3189a413eb8b22fb2105de615d6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908a478641bf57b493185dafd949767c75a3189a413eb8b22fb2105de615d6a7->leave($__internal_908a478641bf57b493185dafd949767c75a3189a413eb8b22fb2105de615d6a7_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3f8d06b6fd6a892eb8b7f83922c82d045413be3aa8ba98f9cccdf8f0a112417a = $this->env->getExtension("native_profiler");
        $__internal_3f8d06b6fd6a892eb8b7f83922c82d045413be3aa8ba98f9cccdf8f0a112417a->enter($__internal_3f8d06b6fd6a892eb8b7f83922c82d045413be3aa8ba98f9cccdf8f0a112417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_3f8d06b6fd6a892eb8b7f83922c82d045413be3aa8ba98f9cccdf8f0a112417a->leave($__internal_3f8d06b6fd6a892eb8b7f83922c82d045413be3aa8ba98f9cccdf8f0a112417a_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_4b43c2ddb59cd3172b030605e3235857891d68e03e932d2c6973c09a4e472950 = $this->env->getExtension("native_profiler");
        $__internal_4b43c2ddb59cd3172b030605e3235857891d68e03e932d2c6973c09a4e472950->enter($__internal_4b43c2ddb59cd3172b030605e3235857891d68e03e932d2c6973c09a4e472950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_4b43c2ddb59cd3172b030605e3235857891d68e03e932d2c6973c09a4e472950->leave($__internal_4b43c2ddb59cd3172b030605e3235857891d68e03e932d2c6973c09a4e472950_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a069b451dcea013658f64a2c446fad9d85f6eefa072746673e8163d640478208 = $this->env->getExtension("native_profiler");
        $__internal_a069b451dcea013658f64a2c446fad9d85f6eefa072746673e8163d640478208->enter($__internal_a069b451dcea013658f64a2c446fad9d85f6eefa072746673e8163d640478208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a069b451dcea013658f64a2c446fad9d85f6eefa072746673e8163d640478208->leave($__internal_a069b451dcea013658f64a2c446fad9d85f6eefa072746673e8163d640478208_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_f336249b0ff56bc2231d62aadc8a6875a8e7e747201b0d8dc46ccf36c074d87b = $this->env->getExtension("native_profiler");
        $__internal_f336249b0ff56bc2231d62aadc8a6875a8e7e747201b0d8dc46ccf36c074d87b->enter($__internal_f336249b0ff56bc2231d62aadc8a6875a8e7e747201b0d8dc46ccf36c074d87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_f336249b0ff56bc2231d62aadc8a6875a8e7e747201b0d8dc46ccf36c074d87b->leave($__internal_f336249b0ff56bc2231d62aadc8a6875a8e7e747201b0d8dc46ccf36c074d87b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
