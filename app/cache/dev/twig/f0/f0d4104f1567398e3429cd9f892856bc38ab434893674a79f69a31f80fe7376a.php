<?php

/* @SonataAdmin/CRUD/base_history.html.twig */
class __TwigTemplate_1085d68015d3d8ae48326d6c168d58a8bdcf9b10daf0864bbf4aa64a44b3dc2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_history.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a713208998e26174fb5ac0db9ff214b01e76d93b1c379508892d63b3d070e9a9 = $this->env->getExtension("native_profiler");
        $__internal_a713208998e26174fb5ac0db9ff214b01e76d93b1c379508892d63b3d070e9a9->enter($__internal_a713208998e26174fb5ac0db9ff214b01e76d93b1c379508892d63b3d070e9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_history.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a713208998e26174fb5ac0db9ff214b01e76d93b1c379508892d63b3d070e9a9->leave($__internal_a713208998e26174fb5ac0db9ff214b01e76d93b1c379508892d63b3d070e9a9_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_15278db5e55903aa4539d21dae3e03eb327858dbfff8b1f35304d60c8b215b1b = $this->env->getExtension("native_profiler");
        $__internal_15278db5e55903aa4539d21dae3e03eb327858dbfff8b1f35304d60c8b215b1b->enter($__internal_15278db5e55903aa4539d21dae3e03eb327858dbfff8b1f35304d60c8b215b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_history.html.twig", 15)->display($context);
        
        $__internal_15278db5e55903aa4539d21dae3e03eb327858dbfff8b1f35304d60c8b215b1b->leave($__internal_15278db5e55903aa4539d21dae3e03eb327858dbfff8b1f35304d60c8b215b1b_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_2659be05775201b313d2257042474191f6bcf6996309c602c26f92dcecf3ccc1 = $this->env->getExtension("native_profiler");
        $__internal_2659be05775201b313d2257042474191f6bcf6996309c602c26f92dcecf3ccc1->enter($__internal_2659be05775201b313d2257042474191f6bcf6996309c602c26f92dcecf3ccc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 36
            echo "                            <tr class=\"";
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")) != false) && ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array())))) {
                echo "current-revision";
            }
            echo "\">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"), "@SonataAdmin/CRUD/base_history.html.twig", 38)->display($context);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["revision"], "username", array()), $this->env->getExtension('translator')->trans("label_unknown_user", array(), "SonataAdminBundle"))) : ($this->env->getExtension('translator')->trans("label_unknown_user", array(), "SonataAdminBundle"))), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 42
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")) == false) || ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array())))) {
                // line 43
                echo "                                        /
                                    ";
            } else {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("base_revision" => $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array()), "compare_revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 47
            echo "                                </td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
";
        
        $__internal_2659be05775201b313d2257042474191f6bcf6996309c602c26f92dcecf3ccc1->leave($__internal_2659be05775201b313d2257042474191f6bcf6996309c602c26f92dcecf3ccc1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  148 => 47,  138 => 45,  134 => 43,  132 => 42,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  104 => 36,  87 => 35,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  54 => 19,  48 => 18,  40 => 15,  34 => 14,  19 => 12,);
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
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-5">*/
/*             <div class="box box-primary">*/
/*                 <div class="box-body table-responsive no-padding">*/
/*                     <table class="table" id="revisions">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>{{ 'td_revision'|trans({}, 'SonataAdminBundle') }}</th>*/
/*                             <th>{{ 'td_timestamp'|trans({}, 'SonataAdminBundle') }}</th>*/
/*                             <th>{{ 'td_username'|trans({}, 'SonataAdminBundle') }}</th>*/
/*                             <th>{{ 'td_action'|trans({}, 'SonataAdminBundle') }}</th>*/
/*                             <th>{{ 'td_compare'|trans({}, 'SonataAdminBundle') }}</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for revision in revisions %}*/
/*                             <tr class="{% if (currentRevision != false and revision.rev == currentRevision.rev) %}current-revision{% endif %}">*/
/*                                 <td>{{ revision.rev }}</td>*/
/*                                 <td>{% include admin.getTemplate('history_revision_timestamp') %}</td>*/
/*                                 <td>{{ revision.username|default('label_unknown_user'|trans({}, 'SonataAdminBundle')) }}</td>*/
/*                                 <td><a href="{{ admin.generateObjectUrl('history_view_revision', object, {'revision': revision.rev }) }}" class="revision-link" rel="{{ revision.rev }}">{{ "label_view_revision"|trans({}, 'SonataAdminBundle') }}</a></td>*/
/*                                 <td>*/
/*                                     {% if (currentRevision == false or revision.rev == currentRevision.rev) %}*/
/*                                         /*/
/*                                     {% else %}*/
/*                                         <a href="{{ admin.generateObjectUrl('history_compare_revisions', object, {'base_revision': currentRevision.rev, 'compare_revision': revision.rev }) }}" class="revision-compare-link" rel="{{ revision.rev }}">{{ 'label_compare_revision'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="revision-detail" class="col-md-7 revision-detail">*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/* */
/*             jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {*/
/*                 event.stopPropagation();*/
/*                 event.preventDefault();*/
/* */
/*                 action = jQuery(this).hasClass('revision-link')*/
/*                     ? 'show'*/
/*                     : 'compare';*/
/* */
/*                 jQuery('#revision-detail').html('');*/
/* */
/*                 if(action == 'show'){*/
/*                     jQuery('table#revisions tbody tr').removeClass('current');*/
/*                     jQuery(this).parent('').removeClass('current');*/
/*                 }*/
/* */
/*                 jQuery.ajax({*/
/*                     url: jQuery(this).attr('href'),*/
/*                     dataType: 'html',*/
/*                     success: function(data) {*/
/*                         jQuery('#revision-detail').html(data);*/
/*                     }*/
/*                 });*/
/* */
/*                 return false;*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */