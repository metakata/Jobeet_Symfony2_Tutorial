<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_96424bfdbff88eb9da9576f163077b360436267de03bcb9cc86bd16ab986803c extends Twig_Template
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
        $__internal_37dd1bf6d90b0c56c7d1bddca92e4cee7f0348c09f6c656e709d55e5442bd75d = $this->env->getExtension("native_profiler");
        $__internal_37dd1bf6d90b0c56c7d1bddca92e4cee7f0348c09f6c656e709d55e5442bd75d->enter($__internal_37dd1bf6d90b0c56c7d1bddca92e4cee7f0348c09f6c656e709d55e5442bd75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_37dd1bf6d90b0c56c7d1bddca92e4cee7f0348c09f6c656e709d55e5442bd75d->leave($__internal_37dd1bf6d90b0c56c7d1bddca92e4cee7f0348c09f6c656e709d55e5442bd75d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
