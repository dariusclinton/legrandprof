<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_271f9e3ca21195614b1d4f908f8fd9ab1842b93429353e2c7da88f06f214557d extends Twig_Template
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
        $__internal_c28c3d1ed6bbde353b0bd62522488170c91979f2e9e67b2903acd80f80992c23 = $this->env->getExtension("native_profiler");
        $__internal_c28c3d1ed6bbde353b0bd62522488170c91979f2e9e67b2903acd80f80992c23->enter($__internal_c28c3d1ed6bbde353b0bd62522488170c91979f2e9e67b2903acd80f80992c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c28c3d1ed6bbde353b0bd62522488170c91979f2e9e67b2903acd80f80992c23->leave($__internal_c28c3d1ed6bbde353b0bd62522488170c91979f2e9e67b2903acd80f80992c23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
