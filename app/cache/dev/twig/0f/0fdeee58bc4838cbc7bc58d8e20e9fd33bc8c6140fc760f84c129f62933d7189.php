<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1f3367bdad487af63122faa8ab82765ef897ebc3f49d08d80673105223fb64c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3557b39c6408d9f1fad731580de72663d04225ae9186f857163c51f56fc260f3 = $this->env->getExtension("native_profiler");
        $__internal_3557b39c6408d9f1fad731580de72663d04225ae9186f857163c51f56fc260f3->enter($__internal_3557b39c6408d9f1fad731580de72663d04225ae9186f857163c51f56fc260f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3557b39c6408d9f1fad731580de72663d04225ae9186f857163c51f56fc260f3->leave($__internal_3557b39c6408d9f1fad731580de72663d04225ae9186f857163c51f56fc260f3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d64993ce026c90f111315d02903d85ef75c621c99311756a812b09ce57c67a4 = $this->env->getExtension("native_profiler");
        $__internal_0d64993ce026c90f111315d02903d85ef75c621c99311756a812b09ce57c67a4->enter($__internal_0d64993ce026c90f111315d02903d85ef75c621c99311756a812b09ce57c67a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0d64993ce026c90f111315d02903d85ef75c621c99311756a812b09ce57c67a4->leave($__internal_0d64993ce026c90f111315d02903d85ef75c621c99311756a812b09ce57c67a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
