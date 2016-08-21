<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2c7ec78bc15b4bde32ff6ee4be73a71012007e4ebc59a5e90e8c4ee1b2d77e45 extends Twig_Template
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
        $__internal_7b56d7621a642f306acd829c8bce7ef528be8e1c8c795aeed81f30c7794f06c4 = $this->env->getExtension("native_profiler");
        $__internal_7b56d7621a642f306acd829c8bce7ef528be8e1c8c795aeed81f30c7794f06c4->enter($__internal_7b56d7621a642f306acd829c8bce7ef528be8e1c8c795aeed81f30c7794f06c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7b56d7621a642f306acd829c8bce7ef528be8e1c8c795aeed81f30c7794f06c4->leave($__internal_7b56d7621a642f306acd829c8bce7ef528be8e1c8c795aeed81f30c7794f06c4_prof);

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
