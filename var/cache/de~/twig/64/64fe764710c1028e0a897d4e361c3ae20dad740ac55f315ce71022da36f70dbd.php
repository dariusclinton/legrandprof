<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9467cf36838c189d2774abb6e50f9ee78a41aba27434224b840f10807064e3e5 extends Twig_Template
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
        $__internal_7fb434dccfe8b96565853123dfea5debfb19924e761efc85129c91fcf167d891 = $this->env->getExtension("native_profiler");
        $__internal_7fb434dccfe8b96565853123dfea5debfb19924e761efc85129c91fcf167d891->enter($__internal_7fb434dccfe8b96565853123dfea5debfb19924e761efc85129c91fcf167d891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7fb434dccfe8b96565853123dfea5debfb19924e761efc85129c91fcf167d891->leave($__internal_7fb434dccfe8b96565853123dfea5debfb19924e761efc85129c91fcf167d891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
