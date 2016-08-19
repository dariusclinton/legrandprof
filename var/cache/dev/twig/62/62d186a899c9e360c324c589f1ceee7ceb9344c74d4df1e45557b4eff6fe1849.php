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
        $__internal_85559bcca2113ef8a76de1a1c01a23be8f9962df0c6c67cc994b7d62f54634d0 = $this->env->getExtension("native_profiler");
        $__internal_85559bcca2113ef8a76de1a1c01a23be8f9962df0c6c67cc994b7d62f54634d0->enter($__internal_85559bcca2113ef8a76de1a1c01a23be8f9962df0c6c67cc994b7d62f54634d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_85559bcca2113ef8a76de1a1c01a23be8f9962df0c6c67cc994b7d62f54634d0->leave($__internal_85559bcca2113ef8a76de1a1c01a23be8f9962df0c6c67cc994b7d62f54634d0_prof);

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
