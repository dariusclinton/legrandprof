<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3456271723e45dcff5a8cbed3f814c55b7ee600f3d89d61152019841094cc34b extends Twig_Template
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
        $__internal_d4d6e2e4a9b1a7e84e0907460ba56f6d80a21c8c5eaa7374b1d1bd7bf8b84482 = $this->env->getExtension("native_profiler");
        $__internal_d4d6e2e4a9b1a7e84e0907460ba56f6d80a21c8c5eaa7374b1d1bd7bf8b84482->enter($__internal_d4d6e2e4a9b1a7e84e0907460ba56f6d80a21c8c5eaa7374b1d1bd7bf8b84482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d4d6e2e4a9b1a7e84e0907460ba56f6d80a21c8c5eaa7374b1d1bd7bf8b84482->leave($__internal_d4d6e2e4a9b1a7e84e0907460ba56f6d80a21c8c5eaa7374b1d1bd7bf8b84482_prof);

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
