<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_00644dffb0d6cab6cb6f25aa5a4d936ec3d00ab1a69f86cfbf0c4456a4e7d051 extends Twig_Template
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
        $__internal_c4e18d052c01c643645090549dc423fc1b0a66eaf3b678ec71b371344757f617 = $this->env->getExtension("native_profiler");
        $__internal_c4e18d052c01c643645090549dc423fc1b0a66eaf3b678ec71b371344757f617->enter($__internal_c4e18d052c01c643645090549dc423fc1b0a66eaf3b678ec71b371344757f617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c4e18d052c01c643645090549dc423fc1b0a66eaf3b678ec71b371344757f617->leave($__internal_c4e18d052c01c643645090549dc423fc1b0a66eaf3b678ec71b371344757f617_prof);

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
