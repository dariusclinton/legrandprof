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
        $__internal_2f67404765216a7b52315cdc39752f70ca6b1bcef25090258b519a011426e742 = $this->env->getExtension("native_profiler");
        $__internal_2f67404765216a7b52315cdc39752f70ca6b1bcef25090258b519a011426e742->enter($__internal_2f67404765216a7b52315cdc39752f70ca6b1bcef25090258b519a011426e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f67404765216a7b52315cdc39752f70ca6b1bcef25090258b519a011426e742->leave($__internal_2f67404765216a7b52315cdc39752f70ca6b1bcef25090258b519a011426e742_prof);

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
