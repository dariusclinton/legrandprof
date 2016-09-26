<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_76fa442cf44630ee7bba1038eb0d50a480e4ef89e91933078e7ae58867cc3ee0 extends Twig_Template
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
        $__internal_e42e60a9c74dcd4c364d9a7cf6940390baf27f1ba985c914b759de7a55e976b9 = $this->env->getExtension("native_profiler");
        $__internal_e42e60a9c74dcd4c364d9a7cf6940390baf27f1ba985c914b759de7a55e976b9->enter($__internal_e42e60a9c74dcd4c364d9a7cf6940390baf27f1ba985c914b759de7a55e976b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e42e60a9c74dcd4c364d9a7cf6940390baf27f1ba985c914b759de7a55e976b9->leave($__internal_e42e60a9c74dcd4c364d9a7cf6940390baf27f1ba985c914b759de7a55e976b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
