<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a5a994b17aee700b7efef4469013f2e26bb3867de4e3d36d5136ff978ab5452c extends Twig_Template
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
        $__internal_bf0e34f35e2f757cb7083ef8e0a641385476605ab815ccb7d438c78ed60c3683 = $this->env->getExtension("native_profiler");
        $__internal_bf0e34f35e2f757cb7083ef8e0a641385476605ab815ccb7d438c78ed60c3683->enter($__internal_bf0e34f35e2f757cb7083ef8e0a641385476605ab815ccb7d438c78ed60c3683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bf0e34f35e2f757cb7083ef8e0a641385476605ab815ccb7d438c78ed60c3683->leave($__internal_bf0e34f35e2f757cb7083ef8e0a641385476605ab815ccb7d438c78ed60c3683_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
