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
        $__internal_0d26d00022a419f1451f6dc80fd8c672d7892d8d0d250abf18cb2b8a79af3a04 = $this->env->getExtension("native_profiler");
        $__internal_0d26d00022a419f1451f6dc80fd8c672d7892d8d0d250abf18cb2b8a79af3a04->enter($__internal_0d26d00022a419f1451f6dc80fd8c672d7892d8d0d250abf18cb2b8a79af3a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0d26d00022a419f1451f6dc80fd8c672d7892d8d0d250abf18cb2b8a79af3a04->leave($__internal_0d26d00022a419f1451f6dc80fd8c672d7892d8d0d250abf18cb2b8a79af3a04_prof);

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
