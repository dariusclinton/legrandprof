<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_af5bca8ba05cddbd4fd32bd6dd7fbcde6eb00384f28b093d62c6a52a14ad7992 extends Twig_Template
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
        $__internal_b138d4752a35549f648ec3f1c14426486ef843790fba860cc89e8a1eda479a84 = $this->env->getExtension("native_profiler");
        $__internal_b138d4752a35549f648ec3f1c14426486ef843790fba860cc89e8a1eda479a84->enter($__internal_b138d4752a35549f648ec3f1c14426486ef843790fba860cc89e8a1eda479a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b138d4752a35549f648ec3f1c14426486ef843790fba860cc89e8a1eda479a84->leave($__internal_b138d4752a35549f648ec3f1c14426486ef843790fba860cc89e8a1eda479a84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
