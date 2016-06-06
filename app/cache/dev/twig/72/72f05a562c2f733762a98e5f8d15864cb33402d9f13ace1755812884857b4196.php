<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_5c2dabcad7c02f5d29caab990a769f5309542c17d0fd9f438c0d07193cb4fd03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfdd51673ece76510ad39f6b29b4c6797d21caf6b7feb311953eb6a9d2c56129 = $this->env->getExtension("native_profiler");
        $__internal_cfdd51673ece76510ad39f6b29b4c6797d21caf6b7feb311953eb6a9d2c56129->enter($__internal_cfdd51673ece76510ad39f6b29b4c6797d21caf6b7feb311953eb6a9d2c56129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfdd51673ece76510ad39f6b29b4c6797d21caf6b7feb311953eb6a9d2c56129->leave($__internal_cfdd51673ece76510ad39f6b29b4c6797d21caf6b7feb311953eb6a9d2c56129_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a69e185451059a2b31187f59da0d20c517eda17cff3a073aba3ca434ddda66f = $this->env->getExtension("native_profiler");
        $__internal_3a69e185451059a2b31187f59da0d20c517eda17cff3a073aba3ca434ddda66f->enter($__internal_3a69e185451059a2b31187f59da0d20c517eda17cff3a073aba3ca434ddda66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3a69e185451059a2b31187f59da0d20c517eda17cff3a073aba3ca434ddda66f->leave($__internal_3a69e185451059a2b31187f59da0d20c517eda17cff3a073aba3ca434ddda66f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/ajax.svg') }}*/
/*         <span class="sf-toolbar-value sf-toolbar-ajax-requests">0</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b class="sf-toolbar-ajax-info"></b>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <table class="sf-toolbar-ajax-requests">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Method</th>*/
/*                         <th>URL</th>*/
/*                         <th>Time</th>*/
/*                         <th>Profile</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="sf-toolbar-ajax-request-list"></tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}*/
/* {% endblock %}*/
/* */
