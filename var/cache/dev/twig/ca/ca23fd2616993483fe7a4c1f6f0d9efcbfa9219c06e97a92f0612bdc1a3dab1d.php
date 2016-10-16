<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_06102e44eea4bb9be2efc8de462e20c56d55bb77100b7d1a1e08482697023de0 extends Twig_Template
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
        $__internal_902548f0927cd9f3fb42650b5e74f26bd7b971009e77d5c1933b847c12c3ac3b = $this->env->getExtension("native_profiler");
        $__internal_902548f0927cd9f3fb42650b5e74f26bd7b971009e77d5c1933b847c12c3ac3b->enter($__internal_902548f0927cd9f3fb42650b5e74f26bd7b971009e77d5c1933b847c12c3ac3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_902548f0927cd9f3fb42650b5e74f26bd7b971009e77d5c1933b847c12c3ac3b->leave($__internal_902548f0927cd9f3fb42650b5e74f26bd7b971009e77d5c1933b847c12c3ac3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
