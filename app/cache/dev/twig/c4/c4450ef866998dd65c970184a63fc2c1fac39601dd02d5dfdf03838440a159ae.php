<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_65f54915e05991b1f6752dbb5f1f381e6d806f42596a33ed1dcc31a6d310830f extends Twig_Template
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
        $__internal_8ee1e1a38a489863c47bd7502ef47b1bbf8a956511715e7d09a10197a12bb030 = $this->env->getExtension("native_profiler");
        $__internal_8ee1e1a38a489863c47bd7502ef47b1bbf8a956511715e7d09a10197a12bb030->enter($__internal_8ee1e1a38a489863c47bd7502ef47b1bbf8a956511715e7d09a10197a12bb030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8ee1e1a38a489863c47bd7502ef47b1bbf8a956511715e7d09a10197a12bb030->leave($__internal_8ee1e1a38a489863c47bd7502ef47b1bbf8a956511715e7d09a10197a12bb030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
