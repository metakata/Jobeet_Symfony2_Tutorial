<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8f7021700362d19e85cdd5034c9e5a239392b7ecba0d50f595687a09a81a8670 extends Twig_Template
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
        $__internal_c21868855bd4404a7c6e76b9438187f34fc83cda46d41c973de5f26d881d533d = $this->env->getExtension("native_profiler");
        $__internal_c21868855bd4404a7c6e76b9438187f34fc83cda46d41c973de5f26d881d533d->enter($__internal_c21868855bd4404a7c6e76b9438187f34fc83cda46d41c973de5f26d881d533d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c21868855bd4404a7c6e76b9438187f34fc83cda46d41c973de5f26d881d533d->leave($__internal_c21868855bd4404a7c6e76b9438187f34fc83cda46d41c973de5f26d881d533d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
