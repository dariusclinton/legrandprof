<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9fe193994b3ab41887dedbfe75a941ad1d74be64589c5bd07914ab14d2700c35 extends Twig_Template
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
        $__internal_96752ea8be6556e6aab3e5024a44547b83986eb4cfd461a8e5e2f71dccee77e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96752ea8be6556e6aab3e5024a44547b83986eb4cfd461a8e5e2f71dccee77e4->enter($__internal_96752ea8be6556e6aab3e5024a44547b83986eb4cfd461a8e5e2f71dccee77e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_96752ea8be6556e6aab3e5024a44547b83986eb4cfd461a8e5e2f71dccee77e4->leave($__internal_96752ea8be6556e6aab3e5024a44547b83986eb4cfd461a8e5e2f71dccee77e4_prof);

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
