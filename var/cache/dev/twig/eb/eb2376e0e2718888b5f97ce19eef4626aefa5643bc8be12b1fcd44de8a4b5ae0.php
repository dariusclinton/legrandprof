<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0056b327bb85321e66c0166dbdebfbb03e4aed9d79b5a5609bfdfaf65eb31b1f extends Twig_Template
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
        $__internal_7870daa0bbafb6cc12d5ba28499518fb6091bbf3c85ecce2bb0cf50b30e7f062 = $this->env->getExtension("native_profiler");
        $__internal_7870daa0bbafb6cc12d5ba28499518fb6091bbf3c85ecce2bb0cf50b30e7f062->enter($__internal_7870daa0bbafb6cc12d5ba28499518fb6091bbf3c85ecce2bb0cf50b30e7f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7870daa0bbafb6cc12d5ba28499518fb6091bbf3c85ecce2bb0cf50b30e7f062->leave($__internal_7870daa0bbafb6cc12d5ba28499518fb6091bbf3c85ecce2bb0cf50b30e7f062_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
