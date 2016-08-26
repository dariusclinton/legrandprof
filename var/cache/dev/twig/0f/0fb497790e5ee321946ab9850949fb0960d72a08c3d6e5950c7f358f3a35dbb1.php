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
        $__internal_1c158186046e2ad64bb631c0f47a449309e8a9aee9f63f5a7ca04046f2761025 = $this->env->getExtension("native_profiler");
        $__internal_1c158186046e2ad64bb631c0f47a449309e8a9aee9f63f5a7ca04046f2761025->enter($__internal_1c158186046e2ad64bb631c0f47a449309e8a9aee9f63f5a7ca04046f2761025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1c158186046e2ad64bb631c0f47a449309e8a9aee9f63f5a7ca04046f2761025->leave($__internal_1c158186046e2ad64bb631c0f47a449309e8a9aee9f63f5a7ca04046f2761025_prof);

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
