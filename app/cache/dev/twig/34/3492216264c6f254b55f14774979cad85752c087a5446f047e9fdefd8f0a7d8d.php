<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e1880ade586176fae0875dd0ba1967bb8f2af1724f74ebd91ccf0c0908c2b6d5 extends Twig_Template
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
        $__internal_5a89e5d5aec89859e8a2d1fd576c4604adf211a8af3f50580802b6179047fc07 = $this->env->getExtension("native_profiler");
        $__internal_5a89e5d5aec89859e8a2d1fd576c4604adf211a8af3f50580802b6179047fc07->enter($__internal_5a89e5d5aec89859e8a2d1fd576c4604adf211a8af3f50580802b6179047fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5a89e5d5aec89859e8a2d1fd576c4604adf211a8af3f50580802b6179047fc07->leave($__internal_5a89e5d5aec89859e8a2d1fd576c4604adf211a8af3f50580802b6179047fc07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
