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
        $__internal_fb98d6fad589ded967fcedf6720bb660663662bcce62dd9daa3d3beb9eab56f2 = $this->env->getExtension("native_profiler");
        $__internal_fb98d6fad589ded967fcedf6720bb660663662bcce62dd9daa3d3beb9eab56f2->enter($__internal_fb98d6fad589ded967fcedf6720bb660663662bcce62dd9daa3d3beb9eab56f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_fb98d6fad589ded967fcedf6720bb660663662bcce62dd9daa3d3beb9eab56f2->leave($__internal_fb98d6fad589ded967fcedf6720bb660663662bcce62dd9daa3d3beb9eab56f2_prof);

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
