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
        $__internal_d77ce8d4a1cabd1510cd485716725a74faab20c47253cf5d6dc55d3a2c76b411 = $this->env->getExtension("native_profiler");
        $__internal_d77ce8d4a1cabd1510cd485716725a74faab20c47253cf5d6dc55d3a2c76b411->enter($__internal_d77ce8d4a1cabd1510cd485716725a74faab20c47253cf5d6dc55d3a2c76b411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d77ce8d4a1cabd1510cd485716725a74faab20c47253cf5d6dc55d3a2c76b411->leave($__internal_d77ce8d4a1cabd1510cd485716725a74faab20c47253cf5d6dc55d3a2c76b411_prof);

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
