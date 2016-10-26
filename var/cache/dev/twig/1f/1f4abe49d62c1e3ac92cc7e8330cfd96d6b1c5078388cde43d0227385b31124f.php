<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dfd9684f0b71722d694f07559912a1633e193d584bc44ba34c351734768abe6d extends Twig_Template
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
        $__internal_0ad2478cd83a4a6a52117fc274643bfb4885450ec54a478f5c47816cfedb34f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad2478cd83a4a6a52117fc274643bfb4885450ec54a478f5c47816cfedb34f4->enter($__internal_0ad2478cd83a4a6a52117fc274643bfb4885450ec54a478f5c47816cfedb34f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0ad2478cd83a4a6a52117fc274643bfb4885450ec54a478f5c47816cfedb34f4->leave($__internal_0ad2478cd83a4a6a52117fc274643bfb4885450ec54a478f5c47816cfedb34f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
