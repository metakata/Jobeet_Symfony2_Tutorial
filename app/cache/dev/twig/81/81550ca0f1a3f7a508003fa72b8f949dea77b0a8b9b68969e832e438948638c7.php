<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_15d3d406f189437a759d0f2d87fea9fd77fbb135140673ff67dccb340a5489bf extends Twig_Template
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
        $__internal_2caf040eab05d9320ff9fbfb05c7582ac40236683c2c2710fce1f98595cdacfb = $this->env->getExtension("native_profiler");
        $__internal_2caf040eab05d9320ff9fbfb05c7582ac40236683c2c2710fce1f98595cdacfb->enter($__internal_2caf040eab05d9320ff9fbfb05c7582ac40236683c2c2710fce1f98595cdacfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2caf040eab05d9320ff9fbfb05c7582ac40236683c2c2710fce1f98595cdacfb->leave($__internal_2caf040eab05d9320ff9fbfb05c7582ac40236683c2c2710fce1f98595cdacfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
