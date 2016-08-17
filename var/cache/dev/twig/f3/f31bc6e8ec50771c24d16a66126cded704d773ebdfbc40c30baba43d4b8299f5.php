<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b441fff5e975f4f7423daf6f62b05e95795ac195a2cab796ffe4b077edefacad extends Twig_Template
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
        $__internal_dfbfaac66b2c574a8b382f8e424fe3c04ac37d1298d8a4c3cb9780873da4223e = $this->env->getExtension("native_profiler");
        $__internal_dfbfaac66b2c574a8b382f8e424fe3c04ac37d1298d8a4c3cb9780873da4223e->enter($__internal_dfbfaac66b2c574a8b382f8e424fe3c04ac37d1298d8a4c3cb9780873da4223e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_dfbfaac66b2c574a8b382f8e424fe3c04ac37d1298d8a4c3cb9780873da4223e->leave($__internal_dfbfaac66b2c574a8b382f8e424fe3c04ac37d1298d8a4c3cb9780873da4223e_prof);

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
