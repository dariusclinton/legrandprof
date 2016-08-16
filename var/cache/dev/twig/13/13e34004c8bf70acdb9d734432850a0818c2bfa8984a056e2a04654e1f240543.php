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
        $__internal_103c571bdbe81b60ca05de2360b299db63ed3740d081beb22f8799aa57d9a32e = $this->env->getExtension("native_profiler");
        $__internal_103c571bdbe81b60ca05de2360b299db63ed3740d081beb22f8799aa57d9a32e->enter($__internal_103c571bdbe81b60ca05de2360b299db63ed3740d081beb22f8799aa57d9a32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_103c571bdbe81b60ca05de2360b299db63ed3740d081beb22f8799aa57d9a32e->leave($__internal_103c571bdbe81b60ca05de2360b299db63ed3740d081beb22f8799aa57d9a32e_prof);

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
