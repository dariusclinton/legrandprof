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
        $__internal_5093c64789676549cd49bd35d04a61dd552255ca336679421001b7c2d9975d05 = $this->env->getExtension("native_profiler");
        $__internal_5093c64789676549cd49bd35d04a61dd552255ca336679421001b7c2d9975d05->enter($__internal_5093c64789676549cd49bd35d04a61dd552255ca336679421001b7c2d9975d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5093c64789676549cd49bd35d04a61dd552255ca336679421001b7c2d9975d05->leave($__internal_5093c64789676549cd49bd35d04a61dd552255ca336679421001b7c2d9975d05_prof);

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
