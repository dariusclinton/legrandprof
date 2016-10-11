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
        $__internal_68f187131d1894850974d7221b6369d3e6d47c60a77087e98951643c36015911 = $this->env->getExtension("native_profiler");
        $__internal_68f187131d1894850974d7221b6369d3e6d47c60a77087e98951643c36015911->enter($__internal_68f187131d1894850974d7221b6369d3e6d47c60a77087e98951643c36015911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_68f187131d1894850974d7221b6369d3e6d47c60a77087e98951643c36015911->leave($__internal_68f187131d1894850974d7221b6369d3e6d47c60a77087e98951643c36015911_prof);

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
