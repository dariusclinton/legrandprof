<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d9cad2af71cda9fb55b2b69710e2e2985b87f8535e385f12c6671590f19f427b extends Twig_Template
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
        $__internal_39d7369d028bf71a8db2aff2fc3ddbb8fe7e40fd7238320abb7185f253546e3b = $this->env->getExtension("native_profiler");
        $__internal_39d7369d028bf71a8db2aff2fc3ddbb8fe7e40fd7238320abb7185f253546e3b->enter($__internal_39d7369d028bf71a8db2aff2fc3ddbb8fe7e40fd7238320abb7185f253546e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_39d7369d028bf71a8db2aff2fc3ddbb8fe7e40fd7238320abb7185f253546e3b->leave($__internal_39d7369d028bf71a8db2aff2fc3ddbb8fe7e40fd7238320abb7185f253546e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
