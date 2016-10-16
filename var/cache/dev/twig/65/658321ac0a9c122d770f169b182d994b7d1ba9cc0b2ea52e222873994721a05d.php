<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d0652ae114d62b73308b07b3484fcc47475a7d626b5308ef7f4347c8193da816 extends Twig_Template
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
        $__internal_cc80882134697c564be6d8707a420bb5bd71d3ea0f1ab6e3cb44d1ec26eb5181 = $this->env->getExtension("native_profiler");
        $__internal_cc80882134697c564be6d8707a420bb5bd71d3ea0f1ab6e3cb44d1ec26eb5181->enter($__internal_cc80882134697c564be6d8707a420bb5bd71d3ea0f1ab6e3cb44d1ec26eb5181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cc80882134697c564be6d8707a420bb5bd71d3ea0f1ab6e3cb44d1ec26eb5181->leave($__internal_cc80882134697c564be6d8707a420bb5bd71d3ea0f1ab6e3cb44d1ec26eb5181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
