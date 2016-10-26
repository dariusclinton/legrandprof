<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1bfe3262502e1645f9cf800b328d06c68abf1ca48fbbd19cb41c06e8a2948450 extends Twig_Template
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
        $__internal_6f4452bd07779f1bb41f10e0435f24d8b8042db6767ad3e20169e66202563833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4452bd07779f1bb41f10e0435f24d8b8042db6767ad3e20169e66202563833->enter($__internal_6f4452bd07779f1bb41f10e0435f24d8b8042db6767ad3e20169e66202563833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f4452bd07779f1bb41f10e0435f24d8b8042db6767ad3e20169e66202563833->leave($__internal_6f4452bd07779f1bb41f10e0435f24d8b8042db6767ad3e20169e66202563833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
