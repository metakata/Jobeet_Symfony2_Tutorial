<?php

/* @SonataAdmin/Button/create_button.html.twig */
class __TwigTemplate_7f174c67eab358a968ed887b4e8d8d20dacf5e734ec90dda0822d44b14958ab9 extends Twig_Template
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
        $__internal_72ea7b4110cf7b13bd9548e14f9a6dc2db338e12152f7fb630af3b1149912db7 = $this->env->getExtension("native_profiler");
        $__internal_72ea7b4110cf7b13bd9548e14f9a6dc2db338e12152f7fb630af3b1149912db7->enter($__internal_72ea7b4110cf7b13bd9548e14f9a6dc2db338e12152f7fb630af3b1149912db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/create_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses", array()))) {
                // line 14
                echo "        <a class=\"sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"fa fa-plus-circle\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <li class=\"divider\" role=\"presentation\"></li>
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 20
                    echo "            <li>
                <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\"></i>
                    ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["subclass"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        <li class=\"divider\" role=\"presentation\"></li>
    ";
            }
        }
        
        $__internal_72ea7b4110cf7b13bd9548e14f9a6dc2db338e12152f7fb630af3b1149912db7->leave($__internal_72ea7b4110cf7b13bd9548e14f9a6dc2db338e12152f7fb630af3b1149912db7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  56 => 23,  51 => 21,  48 => 20,  44 => 19,  41 => 18,  36 => 16,  30 => 14,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.hasRoute('create') and admin.isGranted('CREATE') %}*/
/*     {% if admin.subClasses is empty %}*/
/*         <a class="sonata-action-element" href="{{ admin.generateUrl('create') }}">*/
/*             <i class="fa fa-plus-circle"></i>*/
/*             {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }}</a>*/
/*     {% else %}*/
/*         <li class="divider" role="presentation"></li>*/
/*         {% for subclass in admin.subclasses|keys %}*/
/*             <li>*/
/*                 <a href="{{ admin.generateUrl('create', {'subclass': subclass}) }}">*/
/*                     <i class="fa fa-plus-circle"></i>*/
/*                     {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }} {{ subclass|trans({}, admin.translationdomain) }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*         <li class="divider" role="presentation"></li>*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
