<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_14f207c450f9844e5d53236e7593630d1e79fd7880346680381eeaa5bdf3a675 extends Twig_Template
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
        $__internal_edf8c70083f7be643725b217d796c1d4ec7b7e7c723cdd7fdda3e6afb24cddda = $this->env->getExtension("native_profiler");
        $__internal_edf8c70083f7be643725b217d796c1d4ec7b7e7c723cdd7fdda3e6afb24cddda->enter($__internal_edf8c70083f7be643725b217d796c1d4ec7b7e7c723cdd7fdda3e6afb24cddda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_edf8c70083f7be643725b217d796c1d4ec7b7e7c723cdd7fdda3e6afb24cddda->leave($__internal_edf8c70083f7be643725b217d796c1d4ec7b7e7c723cdd7fdda3e6afb24cddda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
