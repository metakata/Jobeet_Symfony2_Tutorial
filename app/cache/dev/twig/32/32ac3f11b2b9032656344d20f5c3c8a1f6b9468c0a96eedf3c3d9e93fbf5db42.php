<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_7f86dd3ad215280315e2da72b346a9184929bd903d05e32b77aa9d9fe3c897a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c3421cb04f1dcd597061a753be8a34e1a35ce09060922f1a7b8dba4d5d8b6d4 = $this->env->getExtension("native_profiler");
        $__internal_2c3421cb04f1dcd597061a753be8a34e1a35ce09060922f1a7b8dba4d5d8b6d4->enter($__internal_2c3421cb04f1dcd597061a753be8a34e1a35ce09060922f1a7b8dba4d5d8b6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_2c3421cb04f1dcd597061a753be8a34e1a35ce09060922f1a7b8dba4d5d8b6d4->leave($__internal_2c3421cb04f1dcd597061a753be8a34e1a35ce09060922f1a7b8dba4d5d8b6d4_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_2dc64c2a94dc24b66763aa5d1da137b63017fd5d17d6d82642995b7784676a91 = $this->env->getExtension("native_profiler");
        $__internal_2dc64c2a94dc24b66763aa5d1da137b63017fd5d17d6d82642995b7784676a91->enter($__internal_2dc64c2a94dc24b66763aa5d1da137b63017fd5d17d6d82642995b7784676a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 9
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 10
            echo "
        <div class=\"";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 15
            $this->displayBlock('show_title', $context, $blocks);
            // line 18
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 24
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 31
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2dc64c2a94dc24b66763aa5d1da137b63017fd5d17d6d82642995b7784676a91->leave($__internal_2dc64c2a94dc24b66763aa5d1da137b63017fd5d17d6d82642995b7784676a91_prof);

    }

    // line 15
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_11ee97a0893fc59d1ec39deef43a319d7fd85528f4c3cdc09616fc87baf11165 = $this->env->getExtension("native_profiler");
        $__internal_11ee97a0893fc59d1ec39deef43a319d7fd85528f4c3cdc09616fc87baf11165->enter($__internal_11ee97a0893fc59d1ec39deef43a319d7fd85528f4c3cdc09616fc87baf11165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 16
        echo "                            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())), "method"), "html", null, true);
        echo "
                        ";
        
        $__internal_11ee97a0893fc59d1ec39deef43a319d7fd85528f4c3cdc09616fc87baf11165->leave($__internal_11ee97a0893fc59d1ec39deef43a319d7fd85528f4c3cdc09616fc87baf11165_prof);

    }

    // line 24
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_4d64f845e74781e70efed9574077fc8d9ede91173c552374733dc62dbf5a3a89 = $this->env->getExtension("native_profiler");
        $__internal_4d64f845e74781e70efed9574077fc8d9ede91173c552374733dc62dbf5a3a89->enter($__internal_4d64f845e74781e70efed9574077fc8d9ede91173c552374733dc62dbf5a3a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 25
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 26
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 27
            echo "                                        ";
            echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 29
        echo "                                </tr>
                            ";
        
        $__internal_4d64f845e74781e70efed9574077fc8d9ede91173c552374733dc62dbf5a3a89->leave($__internal_4d64f845e74781e70efed9574077fc8d9ede91173c552374733dc62dbf5a3a89_prof);

    }

    // line 1
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b0d7009725742d1d7b9467857dc47a143dee2c8b9915a3cb7cabbbcac31bf9d8 = $this->env->getExtension("native_profiler");
            $__internal_b0d7009725742d1d7b9467857dc47a143dee2c8b9915a3cb7cabbbcac31bf9d8->enter($__internal_b0d7009725742d1d7b9467857dc47a143dee2c8b9915a3cb7cabbbcac31bf9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">
        ";
            // line 3
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_b0d7009725742d1d7b9467857dc47a143dee2c8b9915a3cb7cabbbcac31bf9d8->leave($__internal_b0d7009725742d1d7b9467857dc47a143dee2c8b9915a3cb7cabbbcac31bf9d8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 3,  204 => 2,  184 => 1,  176 => 29,  170 => 27,  168 => 26,  165 => 25,  159 => 24,  149 => 16,  143 => 15,  119 => 32,  105 => 31,  102 => 24,  85 => 23,  78 => 18,  76 => 15,  70 => 12,  64 => 11,  61 => 10,  58 => 9,  40 => 8,  28 => 7,  25 => 6,);
    }
}
/* {% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}*/
/*     <div class="row">*/
/*         {{ block('field_row') }}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% block field_row %}*/
/*     {% for code in groups %}*/
/*         {% set show_group = admin.showgroups[code] %}*/
/* */
/*         <div class="{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}">*/
/*             <div class="{{ show_group.box_class }}">*/
/*                 <div class="box-header">*/
/*                     <h4 class="box-title">*/
/*                         {% block show_title %}*/
/*                             {{ admin.trans(show_group.name, {}, show_group.translation_domain) }}*/
/*                         {% endblock %}*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="box-body table-responsive no-padding">*/
/*                     <table class="table">*/
/*                         <tbody>*/
/*                         {% for field_name in show_group.fields %}*/
/*                             {% block show_field %}*/
/*                                 <tr class="sonata-ba-view-container">*/
/*                                     {% if elements[field_name] is defined %}*/
/*                                         {{ elements[field_name]|render_view_element(object)}}*/
/*                                     {% endif %}*/
/*                                 </tr>*/
/*                             {% endblock %}*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
