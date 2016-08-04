<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a11785cfcfc868ba03c11a3d811bf05331d8cc6f2197ff868f48157f545f52da extends Twig_Template
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
        $__internal_9b9d8c13d0dc1268259d6b7375fd3e83c3268ba66770e4b2f738d2888873bf1c = $this->env->getExtension("native_profiler");
        $__internal_9b9d8c13d0dc1268259d6b7375fd3e83c3268ba66770e4b2f738d2888873bf1c->enter($__internal_9b9d8c13d0dc1268259d6b7375fd3e83c3268ba66770e4b2f738d2888873bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9b9d8c13d0dc1268259d6b7375fd3e83c3268ba66770e4b2f738d2888873bf1c->leave($__internal_9b9d8c13d0dc1268259d6b7375fd3e83c3268ba66770e4b2f738d2888873bf1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
