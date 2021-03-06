<?php

/* job/index.html.twig */
class __TwigTemplate_3d3667c26da25178e00c6d82a6e78a7f3118062ee6aa7194e8d3200127a6f149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/index.html.twig", 1);
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
        $__internal_22f9c1ce914254aa2d47edac558434d5fa4181671e3c770ee28d57f24fa0cdb1 = $this->env->getExtension("native_profiler");
        $__internal_22f9c1ce914254aa2d47edac558434d5fa4181671e3c770ee28d57f24fa0cdb1->enter($__internal_22f9c1ce914254aa2d47edac558434d5fa4181671e3c770ee28d57f24fa0cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f9c1ce914254aa2d47edac558434d5fa4181671e3c770ee28d57f24fa0cdb1->leave($__internal_22f9c1ce914254aa2d47edac558434d5fa4181671e3c770ee28d57f24fa0cdb1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9983053b65cdd0e621ee3c769a8a418261764d6d83355846353663be38927357 = $this->env->getExtension("native_profiler");
        $__internal_9983053b65cdd0e621ee3c769a8a418261764d6d83355846353663be38927357->enter($__internal_9983053b65cdd0e621ee3c769a8a418261764d6d83355846353663be38927357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9983053b65cdd0e621ee3c769a8a418261764d6d83355846353663be38927357->leave($__internal_9983053b65cdd0e621ee3c769a8a418261764d6d83355846353663be38927357_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_188a6d07294f801a2b0fa118886fa9d9b4bd3c1c1a97e46a4925bd45ca60b4b2 = $this->env->getExtension("native_profiler");
        $__internal_188a6d07294f801a2b0fa118886fa9d9b4bd3c1c1a97e46a4925bd45ca60b4b2->enter($__internal_188a6d07294f801a2b0fa118886fa9d9b4bd3c1c1a97e46a4925bd45ca60b4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <div id=\"jobs\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
            echo "      <div class=\"category_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
            echo "\">
        <div class=\"category\">
          <div class=\"feed\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute($context["category"], "slug", array()), "_format" => "atom")), "html", null, true);
            echo "\">Feed</a>
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
            $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "job/index.html.twig", 18)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
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
        
        $__internal_188a6d07294f801a2b0fa118886fa9d9b4bd3c1c1a97e46a4925bd45ca60b4b2->leave($__internal_188a6d07294f801a2b0fa118886fa9d9b4bd3c1c1a97e46a4925bd45ca60b4b2_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 28,  119 => 26,  110 => 22,  107 => 21,  105 => 20,  102 => 19,  100 => 18,  93 => 16,  88 => 14,  81 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*       <div class="category_{{ category.slug }}">*/
/*         <div class="category">*/
/*           <div class="feed">*/
/*             <a href="{{ path('ens_jobeet_category', { 'slug': category.slug, '_format': 'atom' }) }}">Feed</a>*/
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
