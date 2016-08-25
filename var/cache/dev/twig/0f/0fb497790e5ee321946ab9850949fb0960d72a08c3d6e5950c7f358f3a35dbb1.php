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
        $__internal_5227bd905d61cf2dbd6664af524e427362b349ca3bb94c722c924744ef1e0bba = $this->env->getExtension("native_profiler");
        $__internal_5227bd905d61cf2dbd6664af524e427362b349ca3bb94c722c924744ef1e0bba->enter($__internal_5227bd905d61cf2dbd6664af524e427362b349ca3bb94c722c924744ef1e0bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5227bd905d61cf2dbd6664af524e427362b349ca3bb94c722c924744ef1e0bba->leave($__internal_5227bd905d61cf2dbd6664af524e427362b349ca3bb94c722c924744ef1e0bba_prof);

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
