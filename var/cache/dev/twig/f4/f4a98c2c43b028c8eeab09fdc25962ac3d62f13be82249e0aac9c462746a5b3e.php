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
        $__internal_d437958a03909b65ba9729629a8c14c644b88d264f8f40ed3f7d2fe66344ac39 = $this->env->getExtension("native_profiler");
        $__internal_d437958a03909b65ba9729629a8c14c644b88d264f8f40ed3f7d2fe66344ac39->enter($__internal_d437958a03909b65ba9729629a8c14c644b88d264f8f40ed3f7d2fe66344ac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d437958a03909b65ba9729629a8c14c644b88d264f8f40ed3f7d2fe66344ac39->leave($__internal_d437958a03909b65ba9729629a8c14c644b88d264f8f40ed3f7d2fe66344ac39_prof);

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
