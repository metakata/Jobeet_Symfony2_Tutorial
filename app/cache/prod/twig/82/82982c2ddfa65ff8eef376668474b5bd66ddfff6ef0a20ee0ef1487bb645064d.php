<?php

/* :job:index.html.twig */
class __TwigTemplate_ea392680849e1754e334b168e5f3ec667ec1f489500887a36e80fa398bb5ca1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "  <div id=\"jobs\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "      <div>
        <div class=\"category\">
          <div class=\"feed\">
            <a href=\"\">Feed</a>
          </div>
          <h1><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
        </div>
\t\t";
            // line 18
            $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", ":job:index.html.twig", 18)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
            // line 19
            echo "        
        ";
            // line 20
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 21
                echo "        \t<div class=\"more_jobs\">
        \t\tand <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
        \t\tmore...
        \t</div>
        ";
            }
            // line 26
            echo "      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 28,  99 => 26,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  73 => 16,  66 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div id="jobs">*/
/*     {% for category in categories %}*/
/*       <div>*/
/*         <div class="category">*/
/*           <div class="feed">*/
/*             <a href="">Feed</a>*/
/*           </div>*/
/*           <h1><a href="{{ path('ens_jobeet_category', { 'slug': category.slug }) }}">{{ category.name }}</a></h1>*/
/*         </div>*/
/* 		{% include 'EnsJobeetBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/*         */
/*         {% if category.morejobs %}*/
/*         	<div class="more_jobs">*/
/*         		and <a href="{{ path('ens_jobeet_category', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*         		more...*/
/*         	</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
