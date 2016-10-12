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
        $__internal_dcc9885459a74593ad39ef1a0648a6f26c05ab65c3c992fe65a2203d97ad84d7 = $this->env->getExtension("native_profiler");
        $__internal_dcc9885459a74593ad39ef1a0648a6f26c05ab65c3c992fe65a2203d97ad84d7->enter($__internal_dcc9885459a74593ad39ef1a0648a6f26c05ab65c3c992fe65a2203d97ad84d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dcc9885459a74593ad39ef1a0648a6f26c05ab65c3c992fe65a2203d97ad84d7->leave($__internal_dcc9885459a74593ad39ef1a0648a6f26c05ab65c3c992fe65a2203d97ad84d7_prof);

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
