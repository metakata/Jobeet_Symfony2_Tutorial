<?php

/* @SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig */
class __TwigTemplate_531e3880109a83aec5cb1b9cfc2147f1b0f4ab2e36c7fa236ec4e0f12ffd3526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_mosaic_background' => array($this, 'block_sonata_mosaic_background'),
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aec47bcd66ee345cbdf28782a1e042d377c1637ee8e6a7413a87fcc95eadc18c = $this->env->getExtension("native_profiler");
        $__internal_aec47bcd66ee345cbdf28782a1e042d377c1637ee8e6a7413a87fcc95eadc18c->enter($__internal_aec47bcd66ee345cbdf28782a1e042d377c1637ee8e6a7413a87fcc95eadc18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getObjectMetadata", array(0 => $context["object"]), "method");
            // line 24
            echo "
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
            echo "\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 32
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 34
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 54
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0)) || (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"))))) {
                // line 55
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 57
                echo "                                &nbsp;
                            ";
            }
            // line 59
            echo "
                            ";
            // line 60
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 69
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 73
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                // line 74
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 76
            echo "                ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                // line 77
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 79
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </div>
    </td>
</tr>
";
        
        $__internal_aec47bcd66ee345cbdf28782a1e042d377c1637ee8e6a7413a87fcc95eadc18c->leave($__internal_aec47bcd66ee345cbdf28782a1e042d377c1637ee8e6a7413a87fcc95eadc18c_prof);

    }

    // line 34
    public function block_sonata_mosaic_background($context, array $blocks = array())
    {
        $__internal_1e3a20b3960e9fab093d05326de14a5c572150c629bb14e9dde45df83e967dbf = $this->env->getExtension("native_profiler");
        $__internal_1e3a20b3960e9fab093d05326de14a5c572150c629bb14e9dde45df83e967dbf->enter($__internal_1e3a20b3960e9fab093d05326de14a5c572150c629bb14e9dde45df83e967dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 35
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
                                ";
        
        $__internal_1e3a20b3960e9fab093d05326de14a5c572150c629bb14e9dde45df83e967dbf->leave($__internal_1e3a20b3960e9fab093d05326de14a5c572150c629bb14e9dde45df83e967dbf_prof);

    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_30ec48788fafb3ba5059f85ff95580f6b9710b6235e66da30b284ab15ac3a0e4 = $this->env->getExtension("native_profiler");
        $__internal_30ec48788fafb3ba5059f85ff95580f6b9710b6235e66da30b284ab15ac3a0e4->enter($__internal_30ec48788fafb3ba5059f85ff95580f6b9710b6235e66da30b284ab15ac3a0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                ";
        
        $__internal_30ec48788fafb3ba5059f85ff95580f6b9710b6235e66da30b284ab15ac3a0e4->leave($__internal_30ec48788fafb3ba5059f85ff95580f6b9710b6235e66da30b284ab15ac3a0e4_prof);

    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_fffa639e22965580aa37d6112cbfc2edecb3d8f44c808b106ed6822eb3fa3e55 = $this->env->getExtension("native_profiler");
        $__internal_fffa639e22965580aa37d6112cbfc2edecb3d8f44c808b106ed6822eb3fa3e55->enter($__internal_fffa639e22965580aa37d6112cbfc2edecb3d8f44c808b106ed6822eb3fa3e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "description", array()), "html", null, true);
        echo "
                                ";
        
        $__internal_fffa639e22965580aa37d6112cbfc2edecb3d8f44c808b106ed6822eb3fa3e55->leave($__internal_fffa639e22965580aa37d6112cbfc2edecb3d8f44c808b106ed6822eb3fa3e55_prof);

    }

    // line 60
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_09ce918235b3438dbaad1b399eab0969aae181ab921aced615a973526e39986a = $this->env->getExtension("native_profiler");
        $__internal_09ce918235b3438dbaad1b399eab0969aae181ab921aced615a973526e39986a->enter($__internal_09ce918235b3438dbaad1b399eab0969aae181ab921aced615a973526e39986a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 61
        echo "                                ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 62
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } elseif (($this->getAttribute(        // line 63
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "SHOW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 64
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 66
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "
                                ";
        }
        // line 68
        echo "                            ";
        
        $__internal_09ce918235b3438dbaad1b399eab0969aae181ab921aced615a973526e39986a->leave($__internal_09ce918235b3438dbaad1b399eab0969aae181ab921aced615a973526e39986a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 68,  233 => 66,  225 => 64,  223 => 63,  216 => 62,  213 => 61,  207 => 60,  198 => 49,  193 => 48,  187 => 47,  177 => 38,  171 => 37,  161 => 35,  155 => 34,  145 => 80,  131 => 79,  127 => 77,  124 => 76,  120 => 74,  118 => 73,  112 => 69,  110 => 60,  107 => 59,  103 => 57,  97 => 55,  95 => 54,  90 => 51,  88 => 47,  85 => 46,  81 => 40,  78 => 37,  76 => 34,  72 => 32,  65 => 25,  62 => 24,  59 => 23,  42 => 22,  37 => 20,  26 => 11,);
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
/* <!--*/
/* This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:*/
/*     - sonata_mosaic_default_view*/
/*     - sonata_mosaic_hover_view*/
/*     - sonata_mosaic_description*/
/* -->*/
/* */
/* <tr>*/
/*     <td colspan="{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}">*/
/*         <div class="row">*/
/*             {% for object in admin.datagrid.results %}*/
/*                 {% set meta = admin.getObjectMetadata(object) %}*/
/* */
/*                 <div class="col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field" objectId="{{ admin.id(object) }}">*/
/* */
/*                     <div class="mosaic-box-outter">*/
/*                         <div class="mosaic-inner-box">*/
/*                             {#*/
/*                                 This box will be display when the mouse is not on the box*/
/*                             #}*/
/* */
/*                             <div class="mosaic-inner-box-default">*/
/*                                 {% block sonata_mosaic_background %}*/
/*                                     <img src="{{ meta.image }}" alt="" />*/
/*                                 {% endblock %}*/
/*                                 {% block sonata_mosaic_default_view %}*/
/*                                     <span class="mosaic-box-label label label-primary pull-right">#{{ admin.id(object) }}</span>*/
/*                                 {% endblock %}*/
/*                             </div>*/
/* */
/*                             {#*/
/*                                 This box will be display when the mouse is on the box*/
/*                                 You can add more description*/
/*                             #}*/
/*                             <div class="mosaic-inner-box-hover">*/
/*                                 {% block sonata_mosaic_hover_view %}*/
/*                                     <span class="mosaic-box-label label label-primary pull-right">#{{ admin.id(object) }}</span>*/
/*                                     {{ meta.description }}*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="mosaic-inner-text">*/
/*                             {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.isGranted("EXPORT") and admin.getExportFormats()|length) %}*/
/*                                 <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/*                             {% else %}*/
/*                                 &nbsp;*/
/*                             {% endif %}*/
/* */
/*                             {% block sonata_mosaic_description %}*/
/*                                 {% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}*/
/*                                     <a class="mosaic-inner-link" href="{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid(admin) }) }}">{{ meta.title|truncate(40) }}</a>*/
/*                                 {% elseif admin.isGranted('SHOW', object) and admin.hasRoute('show') %}*/
/*                                     <a class="mosaic-inner-link" href="{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid(admin) }) }}">{{ meta.title|truncate(40) }}</a>*/
/*                                 {% else %}*/
/*                                     {{ meta.title|truncate(40) }}*/
/*                                 {% endif %}*/
/*                             {% endblock %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {% if loop.index % 4 == 0 %}*/
/*                     <div class="clearfix hidden-xs"></div>*/
/*                 {% endif %}*/
/*                 {% if loop.index % 2 == 0 %}*/
/*                     <div class="clearfix visible-xs"></div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </td>*/
/* </tr>*/
/* */
