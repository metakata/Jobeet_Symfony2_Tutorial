<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_d5723e228e68b27d5883200a96e1f7fa56346bc12dd0368fe53067b0f526cca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f21a1b26094db86a71f1d2d19e983a66fc5fe51fb1f514e0a6f1eda0718b6637 = $this->env->getExtension("native_profiler");
        $__internal_f21a1b26094db86a71f1d2d19e983a66fc5fe51fb1f514e0a6f1eda0718b6637->enter($__internal_f21a1b26094db86a71f1d2d19e983a66fc5fe51fb1f514e0a6f1eda0718b6637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21a1b26094db86a71f1d2d19e983a66fc5fe51fb1f514e0a6f1eda0718b6637->leave($__internal_f21a1b26094db86a71f1d2d19e983a66fc5fe51fb1f514e0a6f1eda0718b6637_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_a464b76c0f1bbd28819317a085a60d9f0a1557303a3ee61c2980d8edcdd8a525 = $this->env->getExtension("native_profiler");
        $__internal_a464b76c0f1bbd28819317a085a60d9f0a1557303a3ee61c2980d8edcdd8a525->enter($__internal_a464b76c0f1bbd28819317a085a60d9f0a1557303a3ee61c2980d8edcdd8a525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_a464b76c0f1bbd28819317a085a60d9f0a1557303a3ee61c2980d8edcdd8a525->leave($__internal_a464b76c0f1bbd28819317a085a60d9f0a1557303a3ee61c2980d8edcdd8a525_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_beb21517e02b4041b7ac74935fd7d00ce875cec8f2fa4d8fe4ccd169e3f83ea8 = $this->env->getExtension("native_profiler");
        $__internal_beb21517e02b4041b7ac74935fd7d00ce875cec8f2fa4d8fe4ccd169e3f83ea8->enter($__internal_beb21517e02b4041b7ac74935fd7d00ce875cec8f2fa4d8fe4ccd169e3f83ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_beb21517e02b4041b7ac74935fd7d00ce875cec8f2fa4d8fe4ccd169e3f83ea8->leave($__internal_beb21517e02b4041b7ac74935fd7d00ce875cec8f2fa4d8fe4ccd169e3f83ea8_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_3056da6d38c840a7ddfa2f91b70f672aee9f20dfc1e007b42eda42f09b509816 = $this->env->getExtension("native_profiler");
        $__internal_3056da6d38c840a7ddfa2f91b70f672aee9f20dfc1e007b42eda42f09b509816->enter($__internal_3056da6d38c840a7ddfa2f91b70f672aee9f20dfc1e007b42eda42f09b509816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_3056da6d38c840a7ddfa2f91b70f672aee9f20dfc1e007b42eda42f09b509816->leave($__internal_3056da6d38c840a7ddfa2f91b70f672aee9f20dfc1e007b42eda42f09b509816_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_b7cfc48cd87df92e7572d1d9eab35afc3a5ea8f1ed1fdff8ce651bc3d8c805c9 = $this->env->getExtension("native_profiler");
        $__internal_b7cfc48cd87df92e7572d1d9eab35afc3a5ea8f1ed1fdff8ce651bc3d8c805c9->enter($__internal_b7cfc48cd87df92e7572d1d9eab35afc3a5ea8f1ed1fdff8ce651bc3d8c805c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_b7cfc48cd87df92e7572d1d9eab35afc3a5ea8f1ed1fdff8ce651bc3d8c805c9->leave($__internal_b7cfc48cd87df92e7572d1d9eab35afc3a5ea8f1ed1fdff8ce651bc3d8c805c9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {# block classes are prepended with a container class #}*/
/* {% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}*/
/* */
/* {# identify a block role used by the page editor #}*/
/* {% block block_role %}container{% endblock %}*/
/* */
/* {# render container block #}*/
/* {% block block %}*/
/*     {% if decorator %}{{ decorator.pre|raw }}{% endif %}*/
/*     {% for child in block.children %}*/
/*         {% block block_child_render %}*/
/*             {{ sonata_block_render(child) }}*/
/*         {% endblock %}*/
/*     {% endfor %}*/
/*     {% if decorator %}{{ decorator.post|raw }}{% endif %}*/
/* {% endblock %}*/
/* */
