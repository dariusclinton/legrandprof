<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e1d2ec0bb7e892c0be6d592706162c388e88dbcaecb90907faef886212007da2 extends Twig_Template
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
        $__internal_8cd5aa6d26bcc3a79fb7edded1781c800ade4e2fc8cccf8d3c5cea6938b9ae56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd5aa6d26bcc3a79fb7edded1781c800ade4e2fc8cccf8d3c5cea6938b9ae56->enter($__internal_8cd5aa6d26bcc3a79fb7edded1781c800ade4e2fc8cccf8d3c5cea6938b9ae56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8cd5aa6d26bcc3a79fb7edded1781c800ade4e2fc8cccf8d3c5cea6938b9ae56->leave($__internal_8cd5aa6d26bcc3a79fb7edded1781c800ade4e2fc8cccf8d3c5cea6938b9ae56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
