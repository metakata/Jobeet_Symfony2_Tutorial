<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c82f8542a75225f687d11d1bc690cb10ef908e95e6427824d372d58de2587431 extends Twig_Template
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
        $__internal_c46856cefcb331bd270f8a2033a2a61c256051132a759af4191781c0a9eb3bbb = $this->env->getExtension("native_profiler");
        $__internal_c46856cefcb331bd270f8a2033a2a61c256051132a759af4191781c0a9eb3bbb->enter($__internal_c46856cefcb331bd270f8a2033a2a61c256051132a759af4191781c0a9eb3bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c46856cefcb331bd270f8a2033a2a61c256051132a759af4191781c0a9eb3bbb->leave($__internal_c46856cefcb331bd270f8a2033a2a61c256051132a759af4191781c0a9eb3bbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
