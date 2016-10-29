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
        $__internal_beae76e1a619656d2d74c15200ae72ec37326d9e6ca87fe2115f03ed371182de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beae76e1a619656d2d74c15200ae72ec37326d9e6ca87fe2115f03ed371182de->enter($__internal_beae76e1a619656d2d74c15200ae72ec37326d9e6ca87fe2115f03ed371182de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_beae76e1a619656d2d74c15200ae72ec37326d9e6ca87fe2115f03ed371182de->leave($__internal_beae76e1a619656d2d74c15200ae72ec37326d9e6ca87fe2115f03ed371182de_prof);

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
