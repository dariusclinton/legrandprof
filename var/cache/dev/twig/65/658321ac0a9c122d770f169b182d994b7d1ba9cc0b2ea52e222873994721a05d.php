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
        $__internal_87472b916346086cb30e71a017f07852af322865c1ee02b63bae9923e985a0f9 = $this->env->getExtension("native_profiler");
        $__internal_87472b916346086cb30e71a017f07852af322865c1ee02b63bae9923e985a0f9->enter($__internal_87472b916346086cb30e71a017f07852af322865c1ee02b63bae9923e985a0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_87472b916346086cb30e71a017f07852af322865c1ee02b63bae9923e985a0f9->leave($__internal_87472b916346086cb30e71a017f07852af322865c1ee02b63bae9923e985a0f9_prof);

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
