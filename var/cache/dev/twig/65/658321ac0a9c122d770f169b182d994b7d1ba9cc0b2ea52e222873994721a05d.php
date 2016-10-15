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
        $__internal_f524392b1c41f8a50399538615dcaef69a49b95a5ed5b5036eb50c7d653cfd3c = $this->env->getExtension("native_profiler");
        $__internal_f524392b1c41f8a50399538615dcaef69a49b95a5ed5b5036eb50c7d653cfd3c->enter($__internal_f524392b1c41f8a50399538615dcaef69a49b95a5ed5b5036eb50c7d653cfd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f524392b1c41f8a50399538615dcaef69a49b95a5ed5b5036eb50c7d653cfd3c->leave($__internal_f524392b1c41f8a50399538615dcaef69a49b95a5ed5b5036eb50c7d653cfd3c_prof);

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
