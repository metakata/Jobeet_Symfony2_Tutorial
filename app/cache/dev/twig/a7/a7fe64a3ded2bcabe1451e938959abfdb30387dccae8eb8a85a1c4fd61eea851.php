<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_76cac1821c1e2f05d7b76ac7b950a30f2c3697a850c6ed3026d6e15d65b572e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d951077432c01df79bbc72e81047d0d135477d7bf927537cd31bb4605a9d2de3 = $this->env->getExtension("native_profiler");
        $__internal_d951077432c01df79bbc72e81047d0d135477d7bf927537cd31bb4605a9d2de3->enter($__internal_d951077432c01df79bbc72e81047d0d135477d7bf927537cd31bb4605a9d2de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d951077432c01df79bbc72e81047d0d135477d7bf927537cd31bb4605a9d2de3->leave($__internal_d951077432c01df79bbc72e81047d0d135477d7bf927537cd31bb4605a9d2de3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6d8e08c85f3003406a7f4cc3fccd0561a994b8da018da436d96fba56614826ac = $this->env->getExtension("native_profiler");
        $__internal_6d8e08c85f3003406a7f4cc3fccd0561a994b8da018da436d96fba56614826ac->enter($__internal_6d8e08c85f3003406a7f4cc3fccd0561a994b8da018da436d96fba56614826ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_6d8e08c85f3003406a7f4cc3fccd0561a994b8da018da436d96fba56614826ac->leave($__internal_6d8e08c85f3003406a7f4cc3fccd0561a994b8da018da436d96fba56614826ac_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
