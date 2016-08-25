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
        $__internal_4ed965e429d9c70c5c8e25ea70d3b8bafdcdfcd7c282f13c996fc88cfaa1b287 = $this->env->getExtension("native_profiler");
        $__internal_4ed965e429d9c70c5c8e25ea70d3b8bafdcdfcd7c282f13c996fc88cfaa1b287->enter($__internal_4ed965e429d9c70c5c8e25ea70d3b8bafdcdfcd7c282f13c996fc88cfaa1b287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4ed965e429d9c70c5c8e25ea70d3b8bafdcdfcd7c282f13c996fc88cfaa1b287->leave($__internal_4ed965e429d9c70c5c8e25ea70d3b8bafdcdfcd7c282f13c996fc88cfaa1b287_prof);

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
