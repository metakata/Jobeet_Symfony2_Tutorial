<?php

/* @SonataAdmin/CRUD/delete.html.twig */
class __TwigTemplate_89085c50fa573f2d73668897ea7ed0b8af4f8641977f27ee721ee79fe11300d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d78bf15cefd9fe24563483bfd2e9e613ce90afe3f3072de46938cee4d79b9e = $this->env->getExtension("native_profiler");
        $__internal_56d78bf15cefd9fe24563483bfd2e9e613ce90afe3f3072de46938cee4d79b9e->enter($__internal_56d78bf15cefd9fe24563483bfd2e9e613ce90afe3f3072de46938cee4d79b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d78bf15cefd9fe24563483bfd2e9e613ce90afe3f3072de46938cee4d79b9e->leave($__internal_56d78bf15cefd9fe24563483bfd2e9e613ce90afe3f3072de46938cee4d79b9e_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3557908b368a953bbd9908ce3245339525cf874930dae80cdc1bb1462e1e0a68 = $this->env->getExtension("native_profiler");
        $__internal_3557908b368a953bbd9908ce3245339525cf874930dae80cdc1bb1462e1e0a68->enter($__internal_3557908b368a953bbd9908ce3245339525cf874930dae80cdc1bb1462e1e0a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/delete.html.twig", 15)->display($context);
        
        $__internal_3557908b368a953bbd9908ce3245339525cf874930dae80cdc1bb1462e1e0a68->leave($__internal_3557908b368a953bbd9908ce3245339525cf874930dae80cdc1bb1462e1e0a68_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7b195b46e19d15c4b7480e9c0c745fc17fc45d8a1150223c3149ae7544512ff4 = $this->env->getExtension("native_profiler");
        $__internal_7b195b46e19d15c4b7480e9c0c745fc17fc45d8a1150223c3149ae7544512ff4->enter($__internal_7b195b46e19d15c4b7480e9c0c745fc17fc45d8a1150223c3149ae7544512ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_7b195b46e19d15c4b7480e9c0c745fc17fc45d8a1150223c3149ae7544512ff4->leave($__internal_7b195b46e19d15c4b7480e9c0c745fc17fc45d8a1150223c3149ae7544512ff4_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_51c0af6ae03bd533cc5aa2249e8470b4e6ab9684e69cad91f77c8c40b7feb345 = $this->env->getExtension("native_profiler");
        $__internal_51c0af6ae03bd533cc5aa2249e8470b4e6ab9684e69cad91f77c8c40b7feb345->enter($__internal_51c0af6ae03bd533cc5aa2249e8470b4e6ab9684e69cad91f77c8c40b7feb345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_51c0af6ae03bd533cc5aa2249e8470b4e6ab9684e69cad91f77c8c40b7feb345->leave($__internal_51c0af6ae03bd533cc5aa2249e8470b4e6ab9684e69cad91f77c8c40b7feb345_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  112 => 41,  107 => 39,  101 => 37,  99 => 36,  95 => 35,  90 => 33,  85 => 31,  79 => 28,  73 => 25,  67 => 21,  61 => 20,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="sonata-ba-delete">*/
/* */
/*         <div class="box box-danger">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}*/
/*             </div>*/
/*             <div class="box-footer clearfix">*/
/*                 <form method="POST" action="{{ admin.generateObjectUrl('delete', object) }}">*/
/*                     <input type="hidden" name="_method" value="DELETE">*/
/*                     <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/* */
/*                     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                     {% if admin.hasRoute('edit') and admin.isGranted('EDIT', object) %}*/
/*                         {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*                         <a class="btn btn-success" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*                             <i class="fa fa-pencil"></i>*/
/*                             {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                     {% endif %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
