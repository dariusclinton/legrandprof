<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b4391d059f8beac75d2ae4f4fe7581173efe15408d198a38bae077872cbd9d47 extends Twig_Template
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
        $__internal_0c6534268488aff652e922831e53dc566c905a08871ff95ebf86cc4fe5dbd564 = $this->env->getExtension("native_profiler");
        $__internal_0c6534268488aff652e922831e53dc566c905a08871ff95ebf86cc4fe5dbd564->enter($__internal_0c6534268488aff652e922831e53dc566c905a08871ff95ebf86cc4fe5dbd564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_0c6534268488aff652e922831e53dc566c905a08871ff95ebf86cc4fe5dbd564->leave($__internal_0c6534268488aff652e922831e53dc566c905a08871ff95ebf86cc4fe5dbd564_prof);

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
