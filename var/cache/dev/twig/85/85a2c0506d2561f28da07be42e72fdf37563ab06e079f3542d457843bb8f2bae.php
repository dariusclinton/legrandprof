<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4c48128c4b8f8f9b7cfc9338ec38567f51f78dd734bf3665fc2676ed78bcb068 extends Twig_Template
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
        $__internal_03fdaa7c142e37d99c8a5fa1ef3aa0d67ed1fcf157ca34319ce981206941a57c = $this->env->getExtension("native_profiler");
        $__internal_03fdaa7c142e37d99c8a5fa1ef3aa0d67ed1fcf157ca34319ce981206941a57c->enter($__internal_03fdaa7c142e37d99c8a5fa1ef3aa0d67ed1fcf157ca34319ce981206941a57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_03fdaa7c142e37d99c8a5fa1ef3aa0d67ed1fcf157ca34319ce981206941a57c->leave($__internal_03fdaa7c142e37d99c8a5fa1ef3aa0d67ed1fcf157ca34319ce981206941a57c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
