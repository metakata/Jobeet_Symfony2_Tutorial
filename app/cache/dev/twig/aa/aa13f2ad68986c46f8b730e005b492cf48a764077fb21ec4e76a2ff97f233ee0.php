<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5e5dbc2380043d9f40050b32eea33d74d50411137ef4dd4116d4c72c2e7f4ede extends Twig_Template
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
        $__internal_14e71da0da43161464cd87b7e24142246a351c15247edb08a5b187843007ec33 = $this->env->getExtension("native_profiler");
        $__internal_14e71da0da43161464cd87b7e24142246a351c15247edb08a5b187843007ec33->enter($__internal_14e71da0da43161464cd87b7e24142246a351c15247edb08a5b187843007ec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_14e71da0da43161464cd87b7e24142246a351c15247edb08a5b187843007ec33->leave($__internal_14e71da0da43161464cd87b7e24142246a351c15247edb08a5b187843007ec33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
