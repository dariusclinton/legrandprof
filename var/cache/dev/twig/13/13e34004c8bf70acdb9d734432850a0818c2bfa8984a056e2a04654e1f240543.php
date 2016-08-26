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
        $__internal_24b04bcc363cbeb0ee3ae3b77ac5dd9e08d3774bb08d63565ccec0be00ef6acf = $this->env->getExtension("native_profiler");
        $__internal_24b04bcc363cbeb0ee3ae3b77ac5dd9e08d3774bb08d63565ccec0be00ef6acf->enter($__internal_24b04bcc363cbeb0ee3ae3b77ac5dd9e08d3774bb08d63565ccec0be00ef6acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_24b04bcc363cbeb0ee3ae3b77ac5dd9e08d3774bb08d63565ccec0be00ef6acf->leave($__internal_24b04bcc363cbeb0ee3ae3b77ac5dd9e08d3774bb08d63565ccec0be00ef6acf_prof);

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
