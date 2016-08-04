<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ada3edf9af1a3c0adaca9fac6510eabbc79ca78c595334d1a4851ead4cd48a72 extends Twig_Template
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
        $__internal_59a7c3263dec6752870b32db147823803a1232ef74dda67d489ee2dfdbdcb4fc = $this->env->getExtension("native_profiler");
        $__internal_59a7c3263dec6752870b32db147823803a1232ef74dda67d489ee2dfdbdcb4fc->enter($__internal_59a7c3263dec6752870b32db147823803a1232ef74dda67d489ee2dfdbdcb4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_59a7c3263dec6752870b32db147823803a1232ef74dda67d489ee2dfdbdcb4fc->leave($__internal_59a7c3263dec6752870b32db147823803a1232ef74dda67d489ee2dfdbdcb4fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
