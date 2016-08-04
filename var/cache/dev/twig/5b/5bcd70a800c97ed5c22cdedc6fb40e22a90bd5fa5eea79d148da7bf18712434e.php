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
        $__internal_0434fb8ed5dcb48596c3ce8fe6f644216037783b80b6ed90a675bd6b642535c7 = $this->env->getExtension("native_profiler");
        $__internal_0434fb8ed5dcb48596c3ce8fe6f644216037783b80b6ed90a675bd6b642535c7->enter($__internal_0434fb8ed5dcb48596c3ce8fe6f644216037783b80b6ed90a675bd6b642535c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0434fb8ed5dcb48596c3ce8fe6f644216037783b80b6ed90a675bd6b642535c7->leave($__internal_0434fb8ed5dcb48596c3ce8fe6f644216037783b80b6ed90a675bd6b642535c7_prof);

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
