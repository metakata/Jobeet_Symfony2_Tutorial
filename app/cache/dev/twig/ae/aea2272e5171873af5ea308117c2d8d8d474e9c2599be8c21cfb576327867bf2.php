<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4daf3a607dfece4aa0900908ab8c548d11ec654e46afa7c15a980ebdcf4e8a35 extends Twig_Template
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
        $__internal_a7884fe0f0a7d56c7524287793dc2cd8b675f7d90481ca985ab6e849fd68fb3e = $this->env->getExtension("native_profiler");
        $__internal_a7884fe0f0a7d56c7524287793dc2cd8b675f7d90481ca985ab6e849fd68fb3e->enter($__internal_a7884fe0f0a7d56c7524287793dc2cd8b675f7d90481ca985ab6e849fd68fb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a7884fe0f0a7d56c7524287793dc2cd8b675f7d90481ca985ab6e849fd68fb3e->leave($__internal_a7884fe0f0a7d56c7524287793dc2cd8b675f7d90481ca985ab6e849fd68fb3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */