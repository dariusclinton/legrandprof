<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cab840d55728eedb047ca61173d2009c06775e6a8aad7cf5416f67ed9f9cd9e3 extends Twig_Template
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
        $__internal_3165e21b69df39a3c368b1cffadf972797fd467e2dc39f8c310ec20aec4dc40a = $this->env->getExtension("native_profiler");
        $__internal_3165e21b69df39a3c368b1cffadf972797fd467e2dc39f8c310ec20aec4dc40a->enter($__internal_3165e21b69df39a3c368b1cffadf972797fd467e2dc39f8c310ec20aec4dc40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3165e21b69df39a3c368b1cffadf972797fd467e2dc39f8c310ec20aec4dc40a->leave($__internal_3165e21b69df39a3c368b1cffadf972797fd467e2dc39f8c310ec20aec4dc40a_prof);

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
